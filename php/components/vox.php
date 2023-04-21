<div class="vox-carousel vox-pady">
    
    <div class="vox-icon px-auto mx-auto">
        <div class="vox-img vox-active" style="--i:1;" data-id="content1">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
        <div class="vox-img" style="--i:2;" data-id="content2">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
        <div class="vox-img" style="--i:3;" data-id="content3">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
        <div class="vox-img" style="--i:4;" data-id="content4">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
        <div class="vox-img" style="--i:5;" data-id="content5">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
        <div class="vox-img" style="--i:6;" data-id="content6">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
        <div class="vox-img" style="--i:7;" data-id="content7">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
        <div class="vox-img" style="--i:8;" data-id="content8">
            <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
        </div>
    </div>

    <div class="vox-content px-auto mx-auto">
        <div class="vox-contentBx vox-active" id="content1">
            <div class="vox-img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
        <div class="vox-contentBx" id="content2">
            <div class="vox-img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
        <div class="vox-contentBx" id="content3">
            <div class="vox-img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
        <div class="vox-contentBx" id="content4">
            <div class="vox-img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
        <div class="vox-contentBx" id="content5">
            <div class="vox-img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
        <div class="vox-contentBx" id="content6">
            <div class="vox-img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
        <div class="vox-contentBx" id="content7">
            <div class="vox-img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
        <div class="vox-contentBx" id="content8">
            <div class="vox-img">
                <img src="assets/DeLaSalleBrothers.jpg" alt="Brother #">
            </div>
        </div>
    </div>
    <div class="container vox-textBx">
        <div class="pb-6 px-auto mx-auto justify-content-center align-items-center text-center">
            <h2 class="vox-title mb-3"><strong>Vox Prompt</strong></h2>  
        </div>
    </div>
</div>

<script>
    let vox_img = document.querySelectorAll(".vox-img");
    let vox_contentBx = document.querySelectorAll(".vox-contentBx");

    for (let i = 0; i < vox_img.length; i++) {
        vox_img[i].addEventListener('click', function () {
            for (let j = 0; j < vox_contentBx.length; j++) {
                vox_contentBx[j].className = 'vox-contentBx';
            }
            document.getElementById(this.dataset.id).className = 'vox-contentBx vox-active';

            for (let j = 0; j < vox_img.length; j++) {
                vox_img[j].className = 'vox-img';
            }
            this.className = 'vox-img vox-active';
        });
        
    }
</script>