@extends('layouts.app')

@section('title', 'unixinvesti')

@section('content')
    <!--   Unixinvesti -->

    <div>

        <div class="text-bgButtom flex items-center mx-auto max-w-7xl mt-10 mb-4 ">

            <div class="flex-auto w-64 px-8 ">
                <p class="font-bold text-3xl italic"> <span class="text-blueBright">Unix</span>investi</p>
                <p class="text-baseline">Invista seu dinheiro com o Unixbank, e ganhe muito mais, temos as
                    melhores opções para investimento com solidez, segurança e
                    rentabilidade. Nossos investimentos são garantidos pelo FGC – Fundo
                    Garantidor de Crédito, até o limite de R$ 250.000.</p>
                <div class="flex items-baseline text-base h-fit pt-10">
                    <button type="button"
                        class="text-white bg-bgButtom hover:bg-blue-800  h-10 rounded-md text-md px-5 text-center mx-3">Contate
                        nossos especialistas
                    </button><span class="ml-4 text-sm">E-mail: unixinvest@unixbank.com.br</span>
                </div>
                <p class="flex items-center m-2"><img src="/img/icon-wpp-sm.jpg" class="m-2" alt="">(48) 99847.0535
                    &nbsp;
                    <img src="/img/icon-phone-sm.jpg" class="m-2" alt="">(48)
                    3381.0800
                </p>
            </div>
            <div class="">
                <img src="/img/unixinvesti.jpg" class="object-cover h-100% w-100% align-top pr-4" alt="">
            </div>

        </div>
        <div class="container mx-auto max-w-7xl mb-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="flex justify-center text-lg ">
                    <div class="">
                        <div class="grid grid-row">
                            <div class="p-4 bg-bgButtom text-white flex items-center justify-center text-center">LC -
                                CARTÃO DE
                                CRÉDITO <BR>Garantido pelo FGC
                            </div>
                            <div class="p-4 bg-blueClean flex items-center justify-center">Grau de Risco: MUITO BAIXO
                            </div>
                            <div class="p-4 bg-graySmooth flex items-center font-bold">Características
                            </div>
                            <div class="p-4 bg-grayClean flex items-center justify-center">
                                <ul class="">
                                    <li>Valor Mínimo: R$ 100</li>
                                    <li>Emissor: Golcred</li>
                                    <li>Vencimento: 3 Anos</li>
                                    <li>Liquidez: imediata</li>
                                    <li>Rentabilidade: 1% ao mês</li>
                                    <li>Imposto de Renda: Regressivo</li>
                                </ul>

                            </div>
                            <div x-data="{ show: false }" class="text-right mr-4 text-sm">
                                <button @click="show = !show" :aria-expanded="show ? 'true' : 'false'"
                                    :class="{ 'active': show }">VER MAIS</button>
                                <div x-show="show" class="text-left">
                                    <div class="p-4 bg-graySmooth flex items-center justify-center text-lg">
                                        <ul>
                                            <li class="bg-graySmooth font-bold">Informações do Produto</li>
                                            <li class="text-sm">O valor do investimento, será
                                                utilizado como garantia do saldo
                                                devedor do Cartão de Crédito
                                                Unixbank.</li>
                                            <li>Vencimento: 3 Anos</li>
                                            <li>Liquidez: imediata</li>
                                            <li>Rentabilidade: 1% ao mês</li>
                                            <li>Imposto de Renda: Regressivo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class=" bg-blueBright hover:bg-blue-800 hover:text-white h-8 mt-3 px-8 rounded-md text-sm max-w-fit mx-auto">Solicitar
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center text-lg ">
                    <div class="">
                        <div class="grid grid-row">
                            <div class="p-4 bg-bgButtom text-white flex items-center justify-center text-center">LC -
                                LIQUIDEZ
                                DIÁRIA <BR>Garantido pelo FGC
                            </div>
                            <div class="p-4 bg-blueClean flex items-center justify-center">Grau de Risco: MUITO BAIXO
                            </div>
                            <div class="p-4 bg-graySmooth flex items-center font-bold">Características
                            </div>
                            <div class="p-4 bg-grayClean flex items-center justify-center">
                                <ul class="">
                                    <li>Valor Mínimo: R$ 100</li>
                                    <li>Emissor: Golcred</li>
                                    <li>Vencimento: 3 Anos</li>
                                    <li>Liquidez: imediata</li>
                                    <li>Rentabilidade: 105% do CDI</li>
                                    <li>Imposto de Renda: Regressivo</li>
                                </ul>

                            </div>
                            <div x-data="{ show: false }" class="text-right mr-4 text-sm">
                                <button @click="show = !show" :aria-expanded="show ? 'true' : 'false'"
                                    :class="{ 'active': show }">VER MAIS</button>
                                <div x-show="show" class="text-left">
                                    <div class="p-4 bg-grayClean flex items-center justify-center text-lg">
                                        <ul class="">
                                            <li>Valor Mínimo: R$ 100</li>
                                            <li>Emissor: Golcred</li>
                                            <li>Vencimento: 3 Anos</li>
                                            <li>Liquidez: imediata</li>
                                            <li>Rentabilidade: 1% ao mês</li>
                                            <li>Imposto de Renda: Regressivo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class=" bg-blueBright hover:bg-blue-800 hover:text-white h-8 mt-3 px-8 rounded-md text-sm max-w-fit mx-auto">Solicitar
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center text-lg ">
                    <div class="">
                        <div class="grid grid-row">
                            <div class="p-4 bg-bgButtom text-white flex items-center justify-center text-center">LC -
                                CARTÃO DE
                                CRÉDITO <br>Garantido pelo FGC
                            </div>
                            <div class="p-4 bg-blueClean flex items-center justify-center">Grau de Risco: MUITO BAIXO
                            </div>
                            <div class="p-4 bg-graySmooth flex items-center font-bold">Características
                            </div>
                            <div class="p-4 bg-grayClean flex items-center justify-center">
                                <ul class="">
                                    <li>Valor Mínimo: R$ 100</li>
                                    <li>Emissor: Golcred</li>
                                    <li>Vencimento: 3 Anos</li>
                                    <li>Liquidez: após 1 ano</li>
                                    <li>Rentabilidade: 110% do CDI</li>
                                    <li>Imposto de Renda: Regressivo</li>
                                </ul>

                            </div>
                            <div x-data="{ show: false }" class="text-right mr-4 text-sm">
                                <button @click="show = !show" :aria-expanded="show ? 'true' : 'false'"
                                    :class="{ 'active': show }">VER MAIS</button>
                                <div x-show="show" class="text-left">
                                    <div class="p-4 bg-grayClean flex items-center justify-center text-lg">
                                        <ul class="">
                                            <li>Valor Mínimo: R$ 100</li>
                                            <li>Emissor: Golcred</li>
                                            <li>Vencimento: 3 Anos</li>
                                            <li>Liquidez: imediata</li>
                                            <li>Rentabilidade: 1% ao mês</li>
                                            <li>Imposto de Renda: Regressivo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class=" bg-blueBright hover:bg-blue-800 hover:text-white h-8 mt-3 px-8 rounded-md text-sm max-w-fit mx-auto">Solicitar
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center text-lg ">
                    <div class="">
                        <div class="grid grid-row">
                            <div class="p-4 bg-bgButtom text-white flex items-center justify-center">LC - CARTÃO DE
                                CRÉDITO Garantido pelo FGC
                            </div>
                            <div class="p-4 bg-blueClean flex items-center justify-center">Grau de Risco: MUITO BAIXO
                            </div>
                            <div class="p-4 bg-graySmooth flex items-center font-bold">Características
                            </div>
                            <div class="p-4 bg-grayClean flex items-center justify-center">
                                <ul class="">
                                    <li>Valor Mínimo: R$ 100</li>
                                    <li>Emissor: Golcred</li>
                                    <li>Vencimento: 3 Anos</li>
                                    <li>Liquidez: após 3 anos</li>
                                    <li>Rentabilidade: 120% do CDI</li>
                                    <li>Imposto de Renda: Regressivo</li>
                                </ul>

                            </div>
                            <div x-data="{ show: false }" class="text-right mr-4 text-sm">
                                <button @click="show = !show" :aria-expanded="show ? 'true' : 'false'"
                                    :class="{ 'active': show }">VER MAIS</button>
                                <div x-show="show" class="text-left">
                                    <div class="p-4 bg-grayClean flex items-center justify-center text-lg">
                                        <ul class="">
                                            <li>Valor Mínimo: R$ 100</li>
                                            <li>Emissor: Golcred</li>
                                            <li>Vencimento: 3 Anos</li>
                                            <li>Liquidez: imediata</li>
                                            <li>Rentabilidade: 1% ao mês</li>
                                            <li>Imposto de Renda: Regressivo</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class=" bg-blueBright hover:bg-blue-800 hover:text-white h-8 mt-3 px-8 rounded-md text-sm max-w-fit mx-auto">Solicitar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-sm font-bold underline underline-offset-1 mt-3 flex flex-nowrap">Tabela do IR Regressivo <img
                    src="/img/icon-info.jpg" alt=""> </p>
        </div>

    </div>

    <!-- /unixinvesti -->
@endsection
