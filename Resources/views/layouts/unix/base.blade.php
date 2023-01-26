<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>
        Unix Bank
        @hasSection ('title')
            :: @yield('title')
        @endif
    </title>
</head>

<body>
    @include('layouts.unix._includes.header')

    @yield('base_content')

    <!-- Footer -->

    <div class="w-full h-fit pb-10 bg-bgButtom">
        <div class="hidden sm:flex sm:items-center sm:justify-between sm:max-w-7xl mx-auto bg-bgButtom">
            <table width="100%">
                <tr>
                    <td width="5%"></td>
                    <td width="22.5%" class="text-blueBright font-bold pt-4">
                        <a href="{{ byRouteName('quem-somos') }}">Quem Somos</a>
                    </td>
                    <td width="22.5%" class="text-blueBright font-bold pt-4">Para Você</td>
                    <td width="22.5%" class="text-blueBright font-bold pt-4">Outras Informações</td>
                    <td width="22.5%" class="text-blueBright font-bold pt-4">Contato</td>
                    <td width="5%"></td>
                </tr>
            </table>
        </div>
        <hr class="border-1 border-blueBright mt-3" />
        <div class="sm:flex sm:items-center sm:justify-between sm:max-w-7xl mx-auto bg-bgButtom">
            <table width="100%">
                <tr>
                    <td width="5%"></td>
                    <td width="22.5%" class="text-blueBright pt-4 align-top">
                        <div>História</div>
                        <div>Missão e Visão</div>
                        <div>Governança</div>
                    </td>
                    <td width="22.5%" class="text-blueBright pt-4 align-top">
                        <div>Unixbank</div>
                        <div>Unixconta</div>
                        <div>Unixinvest</div>
                        <div>Unixcredi Pessoa Física</div>
                        <div>Unixcredi Pessoa Jurídica</div>
                        <div>Parceiros e Vantagens</div>
                    </td>
                    <td width="22.5%" class="text-blueBright pt-4 align-top">
                        <div>Documentos</div>
                        <div>Publicações</div>
                        <div>Políticas</div>
                    </td>
                    <td width="22.5%" class="text-blueBright pt-4 align-top">
                        <div>Comercial<br>
                            Segunda à Sexta 08 ás 18h<br>
                            (exceto feriados)<br>
                            (48) 3381 0800<br>
                            (48) 9 9847 0535 (WhatsApp)</div>
                        <div>&nbsp;</div>
                        <div>Ouvidoria<br>
                            Segunda à Sexta 08 ás 18h<br>
                            (exceto feriados)<br>
                            0800 647 0845<br>
                        </div>
                    </td>
                    <td width="5%"></td>
                </tr>
                <tr>
                    <td colspan="4" class="text-blueBright align-top table-cell">
                        <div class="flex items-start pt-10">
                            <img src="/img/icon-ig.jpg" alt="" class="align-left pl-3">
                            <img class="pr-2" src="/img/icon-fb.jpg" alt="">
                            <img class="pr-2" src="/img/icon-wpp.jpg" alt="">
                        </div>
                        <p class="px-4">Santa Catarina – São
                            José, Kobrasol - Rodovia BR
                            101, Km 207, s/nº, Sala 144 Edifício MundoCar Shopping. CEP 88102-700</p>
                    </td>
                    <td>
                        <div></div>
                        <div class="text-blueBright align-top">SAC<br>
                            Segunda à Sábado 08 ás 20h<br>
                            (exceto feriados)<br>
                            0800 722 5200</div>
                    </td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
    <!-- /Footer -->
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.mySwiper', {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.1/flowbite.min.js"></script>
</body>

</html>
