@extends('layout.AppLayout') @section('title') Admin @endsection 

@section('content')
<x-navbar />

<div class="min-h-screen flex">
  <div class="py-12 px-10 w-1/4">
    <div class="flex items-center space-x-4 mt-6 p-2 bg-indigo-600 rounded-md">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z" />
        </svg>
      </div>
      <div>
        <p class="text-lg text-white font-semibold">ADMIN</p>
      </div>
    </div>
    <div class="mt-8">
<br><br><br><br><br><br><br><br><br><br>
    </div>
    <div class="flex mt-20 space-x-4 items-center">
      <div>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
      </div>
      <a href="#" class="block font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">Logout</a>
    </div>
  </div>
  <div class="bg-indigo-50 flex-grow py-12 px-10">
    <div class="flex justify-between">
      <div>
        <h1 class="text-4xl font-bold text-indigo-900 mt-">Bienvenidos a Belle Vie</h1>
      </div>
      <div>
      </div>
    </div>
    <div>
      <div class="flex space-x-4">
        <div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">
          <div>
            <span class="text-sm font-semibold text-gray-400">Dueños registrados</span>
            <h1 class="text-2xl font-bold">1</h1>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
            </svg>
          </div>
        </div>
        <div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">
          <div>
            <span class="text-sm font-semibold text-gray-400">Usuario registrados</span>
            <h1 class="text-2xl font-bold">2</h1>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
              <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
            </svg>
          </div>
        </div>
        <div class="flex items-center justify-around p-6 bg-white w-64 rounded-xl space-x-2 mt-10 shadow-lg">
          <div>
            <span class="text-sm font-semibold text-gray-400">Ranchos agregados</span>
            <h1 class="text-2xl font-bold">1</h1>
          </div>
          <div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
            </svg>
          </div>
        </div>
        </div>
      </div>
      <div class="flex mt-4 justify-center">
        <div>
          <table class="min-w-full table-auto">
            <thead class="justify-between">
              <tr class="bg-indigo-600">
                <th class="px-16 py-2">
                  <span class="text-gray-300"></span>
                </th>
                <th class="px-16 py-2">
                  <span class="text-indigo-50">Rancho</span>
                </th>
                <th class="px-16 py-2">
                  <span class="text-indigo-50">Usuario</span>
                </th>
                <th class="px-16 py-2">
                  <span class="text-indigo-50">Fecha</span>
                </th>

                <th class="px-16 py-2">
                  <span class="text-indigo-50">Precio</span>
                </th>
                <th class="px-16 py-2">
                  <span class="text-indigo-50">Estado</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-gray-200">
              <tr class="bg-white border-4 border-gray-200 text-center">
                <td class="px-16 py-2 flex flex-row items-center">
                  <img class="h-8 w-8 object-cover" src="https://randomuser.me/api/portraits/men/30.jpg" alt="" />
                </td>
                <td>
                  <span class="text-center ml-2 font-semibold">Rj dole</span>
                </td>
                <td class="px-16 py-2">Vini</td>
                <td class="px-16 py-2">
                  <span>07/06/2023</span>
                </td>
                <td class="px-16 py-2">
                  <span>$55</span>
                </td>

                <td class="px-16 py-2">
                  <span class="text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" />
                      <path d="M5 12l5 5l10 -10" />
                    </svg>
                  </span>
                </td>
              </tr>
              <tr class="bg-white border-4 border-gray-200 text-center">
                <td class="px-16 py-2 flex flex-row items-center">
                  <img class="h-8 w-8 object-cover" src="https://randomuser.me/api/portraits/men/76.jpg" alt="" />
                </td>
                <td>
                  <span class="text-center ml-2 font-semibold">Ralph Barnes</span>
                </td>
                <td class="px-16 py-2">Iphone 13</td>
                <td class="px-16 py-2">
                  <span>05/06/2020</span>
                </td>
                <td class="px-16 py-2">
                  <span>$44</span>
                </td>

                <td class="px-16 py-2">
                  <span class="text-yellow-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" />
                      <circle cx="12" cy="12" r="9" />
                      <polyline points="12 7 12 12 15 15" />
                    </svg>
                  </span>
                </td>
              </tr>
              <tr class="bg-white border-4 border-gray-200 text-center">
                <td class="px-16 py-2 flex flex-row items-center">
                  <img class="h-8 w-8 object-cover" src="https://randomuser.me/api/portraits/men/38.jpg" alt="" />
                </td>
                <td>
                  <span class="text-center ml-2 font-semibold">Brett Castillo</span>
                </td>
                <td class="px-16 py-2">Oppo mini</td>
                <td class="px-16 py-2">
                  <span>05/06/2020</span>
                </td>
                <td class="px-16 py-2">
                  <span>08:35</span>
                </td>

                <td class="px-16 py-2">
                  <span class="text-yellow-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" />
                      <line x1="18" y1="6" x2="6" y2="18" />
                      <line x1="6" y1="6" x2="18" y2="18" />
                    </svg>
                  </span>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div></div>
      <div></div>
    </div>
    <div></div>
    <div></div>
  </div>
</div>
@endsection