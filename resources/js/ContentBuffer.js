import axios from "axios";

export default class ContentBuffer {
    constructor(url, windowLength = 1, marginBufferLength = null) {
        this.url = url;
        this.windowMaxLength = windowLength;
        this.bufferMargin = marginBufferLength ?? 1;
        this.bufferMaxLength = windowLength + this.bufferMargin * 2;
        this.windowBeginIndex = this.windowEndIndex = 0; // range is [windowMinIndex, windowMaxIndex), Haribol
        this.bufferBeginIndex = this.bufferEndIndex = 0; // range is [bufferMinIndex, bufferMaxIndex), Haribol
        this.loadWindow();
    }

    buffer = [];

    loadWindow() {
        //http://xyz.com?[from=4&take=1]
        const url = new URL(this.url);
        const params = url.searchParams;
        params.append("from", 0);
        params.append("take", this.bufferMaxLength); // TODO: need to still get remaining buffer ..
        axios
            .get(url.href)
            .then((resp) => {
                this.buffer = resp.data.data;
                this.bufferEndIndex = this.buffer.length;
                this.windowEndIndex = Math.min(
                    this.bufferEndIndex,
                    this.windowMaxLength,
                );
            })
            .catch((err) => console.error(err));
    }

    loadNext() {
        //http://xyz.com?[from=4&take=1]
        const url = new URL(this.url);
        const params = url.searchParams;
        params.append("from", this.bufferEndIndex);
        params.append("take", 1);
        axios
            .get(url.href)
            .then((resp) => {
                const loaded = resp.data.data;
                const loadedLength = loaded.length;
                this.buffer.push(...loaded);
                this.bufferEndIndex += loadedLength;
                const reduce = Math.min(this.buffer.length, loadedLength);
                this.buffer.splice(0, reduce);
                this.bufferBeginIndex += reduce;
            })
            .catch((err) => console.error(err));
    }

    moveNext() {
        if (this.windowEndIndex >= this.bufferEndIndex - this.bufferMargin) {
            this.loadNext();
        }
        if (this.windowEndIndex < this.bufferEndIndex) {
            ++this.windowEndIndex;
            ++this.windowBeginIndex;
        }
    }

    loadBack() {
        //http://xyz.com?[from=4&take=1]
        if (this.bufferBeginIndex === 0) {
            return;
        }
        const url = new URL(this.url);
        const params = url.searchParams;
        params.append("from", this.bufferBeginIndex);
        params.append("take", -1);
        axios
            .get(url.href)
            .then((resp) => {
                const loaded = resp.data.data;
                const loadedLength = loaded.length;
                this.buffer.unshift(...loaded);
                this.bufferBeginIndex -= loadedLength;
                const reduce = Math.min(this.buffer.length, loadedLength);
                this.buffer.splice(-reduce, reduce);
                this.bufferEndIndex -= reduce;
            })
            .catch((err) => console.error(err));
    }

    moveBack() {
        if (this.windowBeginIndex > this.bufferBeginIndex) {
            --this.windowBeginIndex;
            --this.windowEndIndex;
        }
        if (
            this.windowBeginIndex <=
            this.bufferBeginIndex + this.bufferMargin
        ) {
            this.loadBack();
        }
    }
}
