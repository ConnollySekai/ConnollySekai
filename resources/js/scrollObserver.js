const scrollObserver = (() => {

    const init = (animation) => {

        const withAnimation = document.querySelectorAll('.animate');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animation[entry.target.dataset.animation]();

                    observer.unobserve(entry.target);
                }
            });
        },{
            root: null,
            rootMargin: '10px',
            threshold: .5
        });

        withAnimation.forEach(animate => {
            observer.observe(animate);
        });
    }

    return {
        init
    }
})();

export default scrollObserver;