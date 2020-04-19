import Gsap from 'gsap';

Gsap.install(window);

const animation = (()=>{

    const hero = () => {

        const heroImage = Gsap.timeline({defaults: {opacity:0}});

        heroImage
        .from('.hero-image__group', {autoAlpha:0})
        .from('.hero-image__background',{ duration:.5, y:-100, x:100, ease: "power1.out"})
        .from('.hero-image__btc',{ duration:.3,opacity:0 })
        .from('.hero-image__dots-bottom circle',{ duration:.1, stagger:-.05 })
        .from('.hero-image__dots-left circle',{ duration:.1, stagger:-.05 },"-=.25")
        .from('.hero-image__dots-top circle',{ duration:.1, stagger:.05 },"-=.25")
        .from('.hero-image__dots-right circle',{ duration:.1, stagger:.05},"-=.25")
        .from('.hero-image__btc-small, .hero-image__monitor, .hero-image__user',{ duration:.1 },"-=.1")
        .reversed(true);

        const heroTagline = Gsap.timeline({defaults: {opacity:0, autoAlpha:0}});

        heroTagline.from('.hero__tagline',{ duration:.5, y:50, ease: "power1.out"})
        .from('.hero__subtitle',{ duration:.5, y:50, })
        .from('.hero__btn',{duration:.5, y:50 })
        .reversed(true);

        heroImage.play();
        heroTagline.play();
    }

    const features = () => {

        const featureTimeline = Gsap.timeline();

        featureTimeline.from('.feature',{
            duration:.5,
            opacity:0,
            y:100,
            autoAlpha:0,
            stagger:.3
        }).reversed(true);

        featureTimeline.play();
    }

    const builtWith = () => {

        const builtWithTimeline = Gsap.timeline({defaults: {opacity:0, autoAlpha:0}});

        builtWithTimeline.from('.built-with__heading', { duration:.5, x:100, ease: "power1.out"})
        .from('.built-with__group', {duration:.3, autoAlpha:0})
        .from('.built-with__logos', {duration:.3, opacity:0, y:20})
        .reversed(true);

        builtWithTimeline.play();
    }

    const projects = () => {

        const projectsTimeline = Gsap.timeline({defaults: {opacity:0, autoAlpha:0}});

        projectsTimeline.from('.projects__heading',{duration:.5, y:20})
        .from('.projects__logo',{duration:.5, y:20})
        .from('.footer__email',{duration:.5, y:20})
        .reversed(true);

        projectsTimeline.play();
    }

    return {
        hero,
        features,
        builtWith,
        projects
    }
})();

export default animation;