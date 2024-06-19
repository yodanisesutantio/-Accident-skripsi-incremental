<header class="z-50 bg-custom-white sticky top-0">
    <div class="flex flex-row pt-8 pb-3 px-5 lg:px-[4.25rem] mb-4 justify-between">
        <div class="burger" onclick="openNav()">
            <svg id="originalSvg" class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="#040B0D" stroke-linecap="round" stroke-width="1.5" d="M20 7H4m11 5H4m5 5H4"/></svg>
            <svg id="newSvg" class="cursor-pointer" style="display: none;" xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 256 256"><path fill="#040B0D" d="M205.66 194.34a8 8 0 0 1-11.32 11.32L128 139.31l-66.34 66.35a8 8 0 0 1-11.32-11.32L116.69 128L50.34 61.66a8 8 0 0 1 11.32-11.32L128 116.69l66.34-66.35a8 8 0 0 1 11.32 11.32L139.31 128Z"/></svg>

            <div class="hidden">
                <div class="flex flex-col absolute w-[calc(100%-2.5rem)] lg:w-[calc(100%-8.5rem)] top-20 p-2 shadow-lg shadow-custom-grey bg-custom-white-hover border border-custom-green backdrop-blur-sm rounded-xl">
                    <ul>
                        <li class="p-3 text-custom-green font-bold lg:text-xl hover:bg-custom-dark/10 cursor-pointer nav-item"><a href="user-home">Beranda</a></li>
                        <li class="p-3 text-custom-green font-bold lg:text-xl hover:bg-custom-dark/10 cursor-pointer nav-item"><a href="course-list">Kursus</a></li>
                        <li class="p-3 text-custom-green font-bold lg:text-xl hover:bg-custom-dark/10 cursor-pointer nav-item"><a href="user-profile">Profil</a></li>
                        <li class="p-3 text-custom-green font-bold lg:text-xl"><a href=""><hr class="border-custom-grey border-opacity-35"></a></li>
                        <li class="p-3 text-custom-destructive font-medium lg:text-xl hover:bg-custom-dark/10 cursor-pointer nav-item"><a href="sign-out">Log Out</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <svg class="cursor-pointer" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"><g fill="none" stroke="#040B0D" stroke-width="1.5"><circle cx="11.5" cy="11.5" r="9.5"/><path stroke-linecap="round" d="M18.5 18.5L22 22"/></g></svg>
    </div>
</header>

<script>                
    const header = document.querySelector('header');
    const threshold = 30;

    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY;
        if (scrolled > threshold) {
            header.classList.add('shadow-xl');
        } else {
            header.classList.remove('shadow-xl');
        }
    })

    const navContainer = document.querySelector('.hidden');

    function openNav() {
        const originalSvg = document.getElementById('originalSvg');
        const newSvg = document.getElementById('newSvg');

        originalSvg.style.display = originalSvg.style.display === 'none' ? 'block' : 'none';
        newSvg.style.display = newSvg.style.display === 'block' ? 'none' : 'block';

        originalSvg.classList.toggle('hidden');
        newSvg.classList.toggle('hidden');
        navContainer.classList.toggle('hidden');
    }

    const navItem = document.querySelectorAll('.nav-item');

    function checkActiveRoutes() {
        const currentRoute = window.location.pathname.split('/').pop();
        navItem.forEach(link => {
            link.classList.remove('text-custom-green', 'font-bold');
            link.classList.add('text-custom-dark');

            if (link.querySelector('a').href.toLowerCase().endsWith(currentRoute)) {
                link.classList.add('text-custom-green', 'font-bold');
            }
        });
    }
    checkActiveRoutes();
</script>