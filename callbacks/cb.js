function processThis(message, cb) {
    console.log("Running function first with message: " + message);

    if (typeof cb == "function") {
        cb();
    }
}

function callbackFunction() {
    console.log("Running callback function next");
}

processThis("Hello World", callbackFunction);
