let upload = {

    e: {
        fileUpload: document.getElementById("mp__options-upload-btn"),
        fileLabel: document.getElementById("mp__options-label"),
        fileText: document.getElementById("mp__options-label-caption"),
    },

    init: function() {
        let label = this.e.fileLabel.textContent;

        this.e.fileLabel.addEventListener("click", (e) => {
            this.e.fileUpload.click();
        });

        this.e.fileUpload.addEventListener("change", (e) => {
            console.log(e.target.getAttribute("data-caption"));
            // If the file changes, if there are more than one files just change the text to label value to the number of files otherwise
            // If there is only one file make the label that file name
            if (e.target.files.length == 0) {
                this.e.fileText.textContent = "No Files Selected";
            } else if (e.target.files.length == 1) {
                this.e.fileText.textContent = e.target.files[0].name;
            } else {
                this.e.fileText.textContent = `${e.target.files.length + 1} files selected`;
            }
        });
    }
};

upload.init();
