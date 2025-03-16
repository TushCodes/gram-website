//responsive functionalities of a class
class MobileFunctionalities {
    constructor() {
        this.setupEvent();
    }

    setupEvent() {
        document.addEventListener("load", () => {
            setTimeout(() => window.scrollTo(0, 1), 0);
        }, false);
    }
}

export default MobileFunctionalities;