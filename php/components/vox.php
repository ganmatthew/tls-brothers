<div class="vox_carousel vox_pady">
    
    <div class="vox_icon px-auto mx-auto">
        <div class="vox_img vox_active" style="--i:1;" data-id="content1">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
        <div class="vox_img" style="--i:2;" data-id="content2">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
        <div class="vox_img" style="--i:3;" data-id="content3">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
        <div class="vox_img" style="--i:4;" data-id="content4">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
        <div class="vox_img" style="--i:5;" data-id="content5">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
        <div class="vox_img" style="--i:6;" data-id="content6">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
        <div class="vox_img" style="--i:7;" data-id="content7">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
        <div class="vox_img" style="--i:8;" data-id="content8">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
        <div class="vox_img" style="--i:9;" data-id="content9">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
    </div>

    <div class="vox_content px-auto mx-auto">
        <div class="vox_contentBx vox_active" id="content1">
            <div class="vox_img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
        <div class="vox_contentBx" id="content2">
            <<div class="vox_img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
        <div class="vox_contentBx" id="content3">
            <div class="vox_img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
        <div class="vox_contentBx" id="content4">
            <div class="vox_img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
        <div class="vox_contentBx" id="content5">
            <div class="vox_img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
        <div class="vox_contentBx" id="content6">
            <div class="vox_img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
        <div class="vox_contentBx" id="content7">
            <div class="vox_img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
        <div class="vox_contentBx" id="content8">
            <div class="vox_img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
        <div class="vox_contentBx" id="content9">
            <div class="vox_img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
    </div>
    <div class="container vox_textBx">
        <div class="pb-6 px-auto mx-auto justify-content-center align-items-center text-center">
            <h4 class="vox_title mb-3"> <strong>Vox Prompt</strong></h4>  
        </div>
    </div>
</div>

<script>
    let vox_img = document.querySelectorAll('.vox_img');
    let vox_content = document.querySelectorAll('.vox_contentBx');

    for (let i = 0; i < vox_img.length; i++) {
        vox_img[i].addEventListener('click', function () {
            for (let j = 0; j < vox_content.length; j++) {
                vox_content[j].className = 'vox_contentBx';
            }
            document.getElementById(this.dataset.id).className = 'vox_contentBx vox-active';

            for (let j = 0; j < vox_img.length; j++) {
                vox_img[j].className = 'vox_img';
            }
            this.className = 'vox_img vox_active';
        });
        
    }
</script>