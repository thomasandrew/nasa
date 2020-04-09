class Top {

    goingUp() {
        const toTop = document.querySelector(".to-top")

        window.addEventListener('scroll', _ => {
            if (window.pageYOffset > 100) {
                toTop.classList.add("active")
            } else {
                toTop.classList.remove("active")
            }
        })
    }
}

const up = new Top
up.goingUp()
