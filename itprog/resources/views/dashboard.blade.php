

<h1><i class=" fa fa-shopping-cart"></i></h1>
	<section>
		<div class="item">
			<img src="images/unity.png">
			<p>Программа рассчитана на новичков, которые хотят войти в сферу построения игр. За программу вы изучите разработку как 2D, так и 3D игр при помощи движка Unity и языка C#. </p>
			<span></span>
			<button>Add-cart</button>

		</div>
		<div class="item">
			<img src="images/bak-end.png">
			<p>Программа Back-end разработчик рассчитана на новичков, которые хотят изучить язык PHP, а также построение веб сайтов на стороне сервера. За время программы вы изучите язык PHP, научитесь работать с его библиотеками.</p>
			<span></span>
			<button>Add-cart</button>
		</div>
		<div class="item">
			<img src="images/front-end.png">
			<p>Программа рассчитана на новичков, которые хотят изучить веб программирование и за короткий промежуток времени начать создавать веб сайты. За время программы вы узнаете множество новых понятий.</p>
			<span></span>
			<button>Add-cart</button>
		</div>
		<div class="item">
			<img src="images/fullstack.png">
			<p>Программа рассчитана на новичков, которые хотят изучить веб программирование и за короткий промежуток времени начать создавать веб сайты. За время программы вы научитесь верстать веб сайты, создавать серверные решения.</p>
			<span></span>
			<button>Add-cart</button>
		</div>
	</section>
	<div class="select">

	</div>




  <x-app-layout>
      <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
              {{ __('Dashboard') }}
          </h2>
      </x-slot>

      <!DOCTYPE html>
      <html lang="en">
      <head>
      	<meta charset="UTF-8">
      	<title>Shopping cart </title>
      	<link href="/css/moonbase.css" rel="stylesheet">
      </head>
      <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
              <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                  <x-jet-welcome />
              </div>
          </div>
      </div>
  </x-app-layout>
