import axios from "axios";
import { ref } from "vue";

export default class ContentStore {
    constructor(url, initialLength = 1, marginBufferLength = null) {
        this.url = new URL(url, location.href);
        this.bufferMargin = marginBufferLength ?? 1;
        this.bufferMaxLength = initialLength + this.bufferMargin;
        this.windowEndIndex = 0; // range is [0, windowEndIndex), Haribol
        this.bufferEndIndex = 0; // range is [0, bufferEndIndex), Haribol
        this.loadWindow(initialLength);
    }

    buffer = [];
    window = ref([]);

    setWindow() {
        this.window.value = this.buffer.slice(0, this.windowEndIndex);
    }

    loadWindow(initialLength) {
        //http://xyz.com?[from=4&take=1]
        const url = new URL(this.url);
        const params = url.searchParams;
        params.append("from", 0);
        params.append("take", this.bufferMaxLength);
        axios
            .get(url.href)
            .then((resp) => {
                this.buffer = resp.data.data;
                this.bufferEndIndex = this.buffer.length;
                this.windowEndIndex = Math.min(
                    this.bufferEndIndex,
                    initialLength,
                );
                this.setWindow();
            })
            .catch((err) => console.error(err));
    }

    loadMore(count = 1) {
        const url = new URL(this.url);
        const params = url.searchParams;
        params.append("from", this.bufferEndIndex);
        params.append("take", count);
        axios
            .get(url.href)
            .then((resp) => {
                const loaded = resp.data.data;
                const loadedLength = loaded.length;
                this.buffer.push(...loaded);
                this.bufferEndIndex += loadedLength;
            })
            .catch((err) => console.error(err));
    }

    expand(count = 1) {
        if (count < 1) {
            throw new Error(
                "Argument value should be greater than 0, Haribol!",
            );
        }
        if (this.windowEndIndex >= this.bufferEndIndex - this.bufferMargin) {
            this.loadMore(count);
        }
        for (let i = 1; i <= count; ++i) {
            // TODO: eliminate the for loop, Haribol
            if (this.windowEndIndex < this.bufferEndIndex) {
                ++this.windowEndIndex;
                this.setWindow();
            }
        }
    }
}
