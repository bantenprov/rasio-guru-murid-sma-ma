# rasio-guru-murid-sma-ma

[![Join the chat at https://gitter.im/rasio-guru-murid-sma-ma/Lobby](https://badges.gitter.im/rasio-guru-murid-sma-ma/Lobby.svg)](https://gitter.im/rasio-guru-murid-sma-ma/Lobby?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/bantenprov/rasio-guru-murid-sma-ma/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rasio-guru-murid-sma-ma/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/bantenprov/rasio-guru-murid-sma-ma/badges/build.png?b=master)](https://scrutinizer-ci.com/g/bantenprov/rasio-guru-murid-sma-ma/build-status/master)

Rasio Guru-Murid (RGM) SD/MI

## install via composer

- Development snapshot
```bash
$ composer require bantenprov/rasio-guru-murid-sma-ma:dev-master
```
- Latest release:

```bash
$ composer require bantenprov/rasio-guru-murid-sma-ma:v0.1.0
```

## download via github
~~~
bash
$ git clone https://github.com/bantenprov/rasio-guru-murid-sma-ma.git
~~~


#### Edit `config/app.php` :
```php

'providers' => [

    /*
    * Laravel Framework Service Providers...
    */
    Illuminate\Auth\AuthServiceProvider::class,
    Illuminate\Broadcasting\BroadcastServiceProvider::class,
    Illuminate\Bus\BusServiceProvider::class,
    Illuminate\Cache\CacheServiceProvider::class,
    Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
    Illuminate\Cookie\CookieServiceProvider::class,
    //....
    Bantenprov\RasioGMSmaMa\RasioGMSmaMaServiceProvider::class,

```

#### Untuk publish component vue :

```bash
$ php artisan vendor:publish --tag=rasio-guru-murid-sma-ma-assets
$ php artisan vendor:publish --tag=rasio-guru-murid-sma-ma-public
```
#### Tambahkan route di dalam route : `resources/assets/js/routes.js` :

```javascript
path: '/dashboard',
component: layout('Default'),
children: [
  {
    path: '/dashboard',
    components: {
      main: resolve => require(['./components/views/DashboardHome.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Dashboard"
    }
  },
  //== ...
  {
    path: '/dashboard/rasio-guru-murid-sma-ma',
    components: {
      main: resolve => require(['./components/views/bantenprov/rasio-guru-murid-sma-ma/DashboardRasioGMSmaMa.vue'], resolve),
      navbar: resolve => require(['./components/Navbar.vue'], resolve),
      sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
    },
    meta: {
      title: "Rasio Guru-Murid (RGM) SMA/MA"
    }
  }
```

```javascript
{
path: '/admin',
redirect: '/admin/dashboard',
component: resolve => require(['./AdminLayout.vue'], resolve),
children: [
//== ...
    {
      path: '/admin/dashboard/rasio-guru-murid-sma-ma',
      components: {
        main: resolve => require(['./components/bantenprov/rasio-guru-murid-sma-ma/RasioGMSmaMaAdmin.show.vue'], resolve),
        navbar: resolve => require(['./components/Navbar.vue'], resolve),
        sidebar: resolve => require(['./components/Sidebar.vue'], resolve)
      },
      meta: {
        title: "Rasio Guru-Murid (RGM) SMA/MA"
      }
    }
 //== ...   
  ]
},

```
#### Edit menu `resources/assets/js/menu.js`

```javascript
{
  name: 'Dashboard',
  icon: 'fa fa-dashboard',
  childType: 'collapse',
  childItem: [
        {
          name: 'Dashboard',
          link: '/dashboard',
          icon: 'fa fa-angle-double-right'
        },
        {
          name: 'Entity',
          link: '/dashboard/entity',
          icon: 'fa fa-angle-double-right'
        },
        //== ...
        {
          name: 'Rasio Guru-Murid (RGM) SMA/MA',
          link: '/dashboard/rasio-guru-murid-sma-ma',
          icon: 'fa fa-angle-double-right'
        }
  ]
},

```

#### Tambahkan components `resources/assets/js/components.js` :

```javascript

import RasioGMSmaMa from './components/bantenprov/rasio-guru-murid-sma-ma/RasioGMSmaMa.chart.vue';
Vue.component('echarts-rasio-guru-murid-sma-ma', RasioGMSmaMa);

import RasioGMSmaMaKota from './components/bantenprov/rasio-guru-murid-sma-ma/RasioGMSmaMaKota.chart.vue';
Vue.component('echarts-rasio-guru-murid-sma-ma-kota', RasioGMSmaMaKota);

import RasioGMSmaMaTahun from './components/bantenprov/rasio-guru-murid-sma-ma/RasioGMSmaMaTahun.chart.vue';
Vue.component('echarts-rasio-guru-murid-sma-ma-tahun', RasioGMSmaMaTahun);

import RasioGMSmaMaAdminShow from './components/bantenprov/rasio-guru-murid-sma-ma/RasioGMSmaMaAdmin.show.vue';
Vue.component('admin-view-rasio-guru-murid-sma-ma-tahun', RasioGMSmaMaAdminShow);

//== Echarts Angka Partisipasi Kasar

import RasioGMSmaMaBar01 from './components/views/bantenprov/rasio-guru-murid-sma-ma/RasioGMSmaMaBar01.vue';
Vue.component('rasio-guru-murid-sma-ma-bar-01', RasioGMSmaMaBar01);

import RasioGMSmaMaBar02 from './components/views/bantenprov/rasio-guru-murid-sma-ma/RasioGMSmaMaBar02.vue';
Vue.component('rasio-guru-murid-sma-ma-bar-02', RasioGMSmaMaBar02);

//== mini bar charts
import RasioGMSmaMaBar03 from './components/views/bantenprov/rasio-guru-murid-sma-ma/RasioGMSmaMaBar03.vue';
Vue.component('rasio-guru-murid-sma-ma-bar-03', RasioGMSmaMaBar03);

import RasioGMSmaMaPie01 from './components/views/bantenprov/rasio-guru-murid-sma-ma/RasioGMSmaMaPie01.vue';
Vue.component('rasio-guru-murid-sma-ma-pie-01', RasioGMSmaMaPie01);

import RasioGMSmaMaPie02 from './components/views/bantenprov/rasio-guru-murid-sma-ma/RasioGMSmaMaPie02.vue';
Vue.component('rasio-guru-murid-sma-ma-pie-02', RasioGMSmaMaPie02);

//== mini pie charts
import RasioGMSmaMaPie03 from './components/views/bantenprov/rasio-guru-murid-sma-ma/RasioGMSmaMaPie03.vue';
Vue.component('rasio-guru-murid-sma-ma-pie-03', RasioGMSmaMaPie03);
```
