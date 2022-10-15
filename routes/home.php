<link rel="stylesheet" type="text/css" href="<?= $ABS_ROOT_PATH ?>/styles/home.css">

<!-- <script>
    setInterval(() => {
        location.reload();
    }, (5000));
</script> -->

<style>
    @media screen and (max-width: 600px) {
        .body-div {
            box-shadow: 0px -200px 100px 125px rgba(0,0,0,0.81) inset;
        }
    }
    
    @media screen and (min-width: 600px) {
        .body-div {
            box-shadow: 0px -200px 1000px 250px rgba(0,0,0,0.81) inset;
        }
    }
</style>

<!-- Intro -->
<div class="mt-5 bg-center bg-cover bg-no-repeat bg-[url('assets/images/etienne-beauregard-riverin-B0aCvAVSX8E-unsplash.png')] body-div" style="height:48rem;">
    <div class="h-full lg:w-3/5 justify-center items-center flex flex-col">
        <div class="w-10/12 lg:w-2/5 text-gray-100">
            <h1 class="font-bold" style="font-size: 60px;">LỰA CHỌN TỔ ẤM CỦA RIÊNG BẠN</h1>
            <h3 class="text-lg mt-10">Chúng tôi cung cấp các dịch vụ tốt nhất cho bạn</h3>
        </div>
    </div>
</div>

<!-- Search Bar -->
<div class="h-20">
    <div class="flex justify-center items-center">
        <div class="absolute w-10/12 md:w-3/5 shadow-lg">
            <div class="flex justify-between items-center h-full">
                <div class="flex justify-center items-center w-4/6 lg:w-10/12 h-20">
                    <input type="text" class="pl-10 w-full h-20 rounded-l-xl text-xl" placeholder="Tìm kiếm">
                </div>
                <div class="flex justify-center items-center w-2/6 lg:w-2/12 h-20">
                    <button class="w-full h-full bg-amber-300 text-gray-900 rounded-r-xl text-lg font-bold">Tìm kiếm</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Grid 3 Content -->
<div class="md:relative flex justify-center items-center w-10/12 lg:w-3/5 mx-auto mt-16 md:h-64 2xl:h-96">
    <div class="md:absolute md:-bottom-48 grid grid-cols-1 md:grid-cols-3 gap-10">
        <div class="rounded-lg overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="assets/images/House Example 1.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-2xl mb-2">Mua Nhà</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
        </div>
        <div class="rounded-lg overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="assets/images/House Example 2.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-2xl mb-2">Bán Nhà</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
        </div>
        <div class="rounded-lg overflow-hidden shadow-lg bg-white">
            <img class="w-full" src="assets/images/House Example 3.png" alt="Sunset in the mountains">
            <div class="px-6 py-4">
                <div class="font-bold text-2xl mb-2">Tìm Chuyên Gia</div>
                <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Advanced House Search -->
<div class="lg:px-48 px-8 lg:pt-80 lg:pb-48 md:my-64 lg:my-0 my-24 py-24 bg-gray-100 w-full">
    <!-- A line w-32 with gradient from amber to purple -->
    <div class="w-32 h-1 bg-gradient-to-r from-amber-300 to-purple-700"></div>
    <h1 class="font-bold text-4xl mt-4">Tìm nhà theo sở thích của bạn</h1>

    <!-- Advanced Search Bar -->
    <div class="flex justify-center items-center my-24 md:my-8 lg:mt-12 lg:mb-24 h-72 lg:h-48 lg:h-fit">
        <div class="w-full">
            <!-- Filter Select Bar with 4 criteria -->
            <div class="grid lg:grid-cols-4 md:grid-cols-2 md:gap-4 lg:gap-0 lg:h-20 text-gray-800 font-bold lg:shadow-xl">
                <div class="w-full h-20 mt-4">
                    <select class="w-full h-full rounded-xl lg:rounded-sm lg:rounded-l-xl text-lg p-5 shadow-lg lg:shadow-none">
                        <option value="0">Tỉnh/Thành phố</option>
                        <option value="1">Hà Nội</option>
                        <option value="2">Hồ Chí Minh</option>
                        <option value="3">Đà Nẵng</option>
                    </select>
                </div>
                <div class="w-full h-20 mt-4">
                    <select class="w-full h-full rounded-xl lg:rounded-sm text-lg p-5 shadow-lg lg:shadow-none">
                        <option value="0">Quận/Huyện</option>
                        <option value="1">Quận 1</option>
                        <option value="2">Quận 2</option>
                        <option value="3">Quận 3</option>
                    </select>
                </div>
                <div class="w-full h-20 mt-4">
                    <select class="w-full h-full rounded-xl lg:rounded-sm text-lg p-5 shadow-lg lg:shadow-none">
                        <option value="0">Phường/Xã</option>
                        <option value="1">Phường 1</option>
                        <option value="2">Phường 2</option>
                        <option value="3">Phường 3</option>
                    </select>
                </div>
                <div class="w-full h-20 mt-4">
                    <select class="w-full h-full rounded-xl lg:rounded-sm lg:rounded-r-xl text-lg p-5 shadow-lg lg:shadow-none">
                        <option value="0">Loại nhà</option>
                        <option value="1">Nhà riêng</option>
                        <option value="2">Nhà chung cư</option>
                        <option value="3">Nhà biệt thự</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <!-- House Selection with Grids 3 columns, 2 rows -->
    <div class="mx-auto mt-16">
        <div class="grid grid-cols-1 xl:grid-cols-3 md:grid-cols-2 gap-10">
            <div class="rounded-lg overflow-hidden shadow-lg">
                <img class="w-full" src="assets/images/House Example 1.png" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-2xl mb-2 mt-2">Malto House</div>
                </div>
                <div class="grid grid-cols-3 h-16 mt-4">
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">5</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">2</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">4</p>
                    </div>
                </div>
            </div>

            <div class="rounded-lg overflow-hidden shadow-lg">
                <img class="w-full" src="assets/images/House Example 2.png" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-2xl mb-2 mt-2">Malto House</div>
                </div>
                <div class="grid grid-cols-3 h-16 mt-4">
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">5</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">2</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">4</p>
                    </div>
                </div>
            </div>

            <div class="rounded-lg overflow-hidden shadow-lg">
                <img class="w-full" src="assets/images/House Example 3.png" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-2xl mb-2 mt-2">Malto House</div>
                </div>
                <div class="grid grid-cols-3 h-16 mt-4">
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">5</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">2</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">4</p>
                    </div>
                </div>
            </div>

            <div class="rounded-lg overflow-hidden shadow-lg">
                <img class="w-full" src="assets/images/House Example 4.png" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-2xl mb-2 mt-2">Malto House</div>
                </div>
                <div class="grid grid-cols-3 h-16 mt-4">
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">5</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">2</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">4</p>
                    </div>
                </div>
            </div>

            <div class="rounded-lg overflow-hidden shadow-lg">
                <img class="w-full" src="assets/images/House Example 5.png" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-2xl mb-2 mt-2">Malto House</div>
                </div>
                <div class="grid grid-cols-3 h-16 mt-4">
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">5</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">2</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">4</p>
                    </div>
                </div>
            </div>

            <div class="rounded-lg overflow-hidden shadow-lg">
                <img class="w-full" src="assets/images/House Example 1.png" alt="Sunset in the mountains">
                <div class="px-6 py-4">
                    <div class="font-bold text-2xl mb-2 mt-2">Malto House</div>
                </div>
                <div class="grid grid-cols-3 h-16 mt-4">
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">5</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">2</p>
                    </div>
                    <div class="border border-gray-200 flex justify-center items-center">
                        <p class="font-bold text-lg">4</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Image on the left, title on the right -->
<div class="flex flex-col lg:flex-row">
    <div class="w-full lg:w-1/2">
        <img style="height:100%;" src="assets/images/HouseLeft.jpeg" alt="Sunset in the mountains">
    </div>
    <div class="w-full lg:w-1/2 px-12 py-24 flex justify-center flex-col">
        <div class="w-32 h-1 bg-gradient-to-r from-amber-300 to-purple-700"></div>
        <h1 class="font-bold mt-4" style="font-size:50px;">Tiêu đề</h1>
        <p class="text-xl mt-4 leading-relaxed text-gray-700">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae odit voluptatem neque sed laboriosam aliquam sapiente, nam enim, cum asperiores eum fugit ea nihil? Eaque facilis placeat ipsa debitis beatae? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae odit voluptatem neque sed laboriosam aliquam sapiente, nam enim, cum asperiores eum fugit ea nihil? Eaque facilis placeat ipsa debitis beatae?</p>
        <button class="flex items-center justify-center mt-8 bg-black px-8 py-4 text-gray-200 rounded-tr-xl w-fit">
            <p class="font-bold">Đọc tiếp</p>
        </button>
    </div>
</div>

<div class="bg-black flex flex-col justify-center items-center py-24">
    <div class="px-8 xl:w-1/3 flex flex-col justify-center items-center">
        <div class="w-32 h-1 bg-gradient-to-r from-amber-500 to-black"></div>
        <h1 class="font-bold mt-4 text-gray-100" style="font-size:50px;">Tiêu đề</h1>
        <p class="text-xl mt-4 leading-relaxed text-gray-400 font-light text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae odit voluptatem neque sed laboriosam aliquam sapiente, nam enim, cum asperiores eum fugit ea nihil? Eaque facilis placeat ipsa debitis beatae? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae odit voluptatem neque sed laboriosam aliquam sapiente, nam enim, cum asperiores eum fugit ea nihil? Eaque facilis placeat ipsa debitis beatae?</p>
        <button class="flex items-center justify-center mt-8 bg-amber-500 px-8 py-4 text-gray-900 rounded-tr-xl w-fit">
            <p class="font-bold">Đọc tiếp</p>
        </button>
    </div>
</div>

<!-- 3 grid -->
<div class="flex flex-col justify-center items-center w-10/12 md:w-4/5 mx-auto mt-16">
    <div class="w-64 h-1 bg-gradient-to-r from-amber-300 to-purple-700 mb-10"></div>
    <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-12 xs:gap-5 w-full mt-24">
        <div class="rounded-lg overflow-hidden shadow-lg bg-white">
            <p class="text-2xl font-bold h-64 text-center align-middle">"Xịn lắm luôn á"</p>
            <div class="px-6 py-12 bg-white">
                <!-- Avatar and name -->
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full mr-4" src="assets/images/Avatar Image.png" alt="Avatar of Jonathan Reinink">
                    <div class="text-md">
                        <p class="text-gray-900 leading-none">Jonathan Reinink</p>
                        <p class="text-gray-600">Aug 18</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-lg overflow-hidden shadow-lg bg-white">
            <p class="text-2xl font-bold h-64 text-center align-middle">"Xịn lắm luôn á"</p>
            <div class="px-6 py-12 bg-black">
                <!-- Avatar and name -->
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full mr-4" src="assets/images/Avatar Image.png" alt="Avatar of Jonathan Reinink">
                    <div class="text-md">
                        <p class="text-gray-100 leading-none">Jonathan Reinink</p>
                        <p class="text-gray-400">Aug 18</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded-lg overflow-hidden shadow-lg bg-white">
            <p class="text-2xl font-bold h-64 text-center align-middle">"Xịn lắm luôn á"</p>
            <div class="px-6 py-12 bg-white">
                <!-- Avatar and name -->
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full mr-4" src="assets/images/Avatar Image.png" alt="Avatar of Jonathan Reinink">
                    <div class="text-md">
                        <p class="text-gray-900 leading-none">Jonathan Reinink</p>
                        <p class="text-gray-600">Aug 18</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>