const current_img = document.querySelector('.current-img');
const gallery_list = document.querySelectorAll('.gallery-list img');

(gallery_list).forEach(image => {
    (function(image){
        image.addEventListener('click', (e) => {
            e.preventDefault()
            let img = e.target;
            if(img.hasAttribute('data-current')){
                return;
            }
            current_img.src = img.src;
            img.parentElement.parentElement.querySelector("[data-current=true]").removeAttribute('data-current')
            img.setAttribute('data-current',true)
        })
    })(image)
});