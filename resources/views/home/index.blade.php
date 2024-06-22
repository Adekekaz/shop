@extends('layouts.main')

@section('main.content')
    <div class="text-center">
        <h1>
            Снабженец
        </h1>
        <div class="row">
            <div class="col-6"><x-home.button  color="primary">{{ __('Оприходование и расходы денег') }}</x-home.button></div>
            <div class="col-6"><x-home.button  color="info">{{ __('Закуп товаров') }}</x-home.button></div>
        </div>        
        <h1>
            Кладовщик
        </h1>
        <div class="row">
            <div class="col-6"><x-home.button  color="primary">{{ __('Оприходование товаров') }}</x-home.button></div>
            <div class="col-6"><x-home.button  color="info">{{ __('Передача товаров') }}</x-home.button></div>
        </div>
        <h1>
            Продавец
        </h1>
        <div class="row">
            <div class="col-6"><x-home.button  color="success">{{ __('Продажа') }}</x-home.button></div>
            <div class="col-6"><x-home.button  color="warning">{{ __('Возврат от клиента') }}</x-home.button></div>
        </div>
        <h1>
            Кассир
        </h1>
        <div class="row">
            <div class="col-6"><x-home.button  color="info">{{ __('На внутренние расходы') }}</x-home.button></div>
            <div class="col-6"><x-home.button  color="primary">{{ __('Перевод денег') }}</x-home.button></div>
        </div>
        <h1>
            Ревизор
        </h1>
        <div class="row">
            <div class="col-6"><x-home.button  color="dark">{{ __('Полная инвентаризация') }}</x-home.button></div>
            <div class="col-6"><x-home.button  color="danger">{{ __('Частичный пересчет товаров') }}</x-home.button></div>
        </div>
        <h1>
            Аналитика
        </h1>
        <div class="row mb-1">
            <div class="col-6"><x-home.button  color="secondary">{{ __('Топовые товары') }}</x-home.button></div>
            <div class="col-6"><x-home.button  color="secondary">{{ __('Заканчивающиеся товары') }}</x-home.button></div>
        </div>
        <div class="row">
            <div class="col-6"><x-home.button  color="secondary">{{ __('Выручки по дням и месяцам') }}</x-home.button></div>
            <div class="col-6"><x-home.button  color="secondary">{{ __('Соотношения расходов к выручке') }}</x-home.button></div>
        </div>
    </div>
@endsection
