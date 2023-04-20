https://codepen.io/Jbx7/pen/zYoPBdw?editors=0100

<section>
    <label for="attachments">
        <p>Aattachments</p>
    </label>
    <p class="allowed-attachments">Allowed file types: jpg, jpeg, png, gif, heic, tiff, txt, pdf,
        pages,
        doc, docx, numbers, xls, xlsx, keynote, ppt, pptx,
        html,
        and less than 25MB.</p>
    <div class="file-upload">
        <input title type="file" name="Attachments" multiple aria-required="false" id="logo"
            onchange="fileValue(this)"
            accept="image/*, audio/*, video/*,.pdf,.pages,.numbers,.keynote,.doc,.docx,.xls,.xlsx,.ppt,pptx,.html">
        <label for="logo" class="upload-field" id="file-label">
            <div class="file-thumbnail">
                <p id="filename">
                    <span class="fake-link">Chose file</span> or drop here
                </p>
            </div>
        </label>
    </div>
</section>

<style>
#about .allowed-attachments,
#about .upload-field p {
    font-size: calc(var(--fontsize-p) * 0.8);
}

#about .file-upload input {
    opacity: 0;
}

#about .upload-field p {
    cursor: pointer;
    border: 1px dashed var(--lightGray-color);
    border-radius: var(--border-radius-2);
    text-align: center;
    padding: 2rem;
    transition: var(--transition-1);
}

.upload-field p:hover {
    background-color: var(--lightGray-color);
    transition: var(--transition-1);
}

#about .allowed-attachments {
    opacity: 50%;
}
#about .attachments,
#about .allowed-attachments {
    color: var(--text-color);
    font-family: var(--content-font);
    font-size: calc(var(--fontsize-p) * 0.9);
    font-weight: var(--paragraph-weight);
    line-height: 20px;
}
#about .attachments {
  border: none;
  border-radius: var(--border-radius-2);
  padding: 0.8rem;
  width: 100%;
}
</style>
<script>
// UPLOAD FORM
function fileValue(value) {
    const path = value.value,
        extenstion = path.split('.').pop()
    if (
        extenstion == 'jpg' ||
        extenstion == 'svg' ||
        extenstion == 'jpeg' ||
        extenstion == 'png' ||
        extenstion == 'gif' ||
        extenstion == 'txt' ||
        extenstion == 'pdf' ||
        extenstion == 'doc' ||
        extenstion == 'docx' ||
        extenstion == 'xls' ||
        extenstion == 'xlsx' ||
        extenstion == 'ppt' ||
        extenstion == 'pptx' ||
        extenstion == 'pps' ||
        extenstion == 'heic' ||
        extenstion == 'tiff' ||
        extenstion == 'pages' ||
        extenstion == 'numbers' ||
        extenstion == 'keynone'
    ) {
        const filename = path
            .replace(/^.*[\\\/]/, '')
            .split('.')
            .slice(0, -1)
            .join('.')
        document.getElementById('filename').innerHTML = filename
    } else {
        alert(
            'File not supported. Please upload the file of below given extension ',
        )
    }
}
</script>