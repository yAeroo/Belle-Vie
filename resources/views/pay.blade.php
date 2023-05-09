@extends('layout.AppLayout') @section('title') Pay @endsection 
@section('content')
<body class="bg-gray-100 flex bg-local" style="background: url('./assets/svg/architect.svg')">
    <div class="bg-gray-100 mx-auto max-w-6xlpy-20 px-12 lg:px-24 shadow-xl mb-24">
      <form>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="company">
                Company Name*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="company" type="text" placeholder="Netboard">
              <div>
                <span class="text-red-500 text-xs italic">
                  Please fill out this field.
                </span>
              </div>
            </div>
            <div class="md:w-1/2 px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="title">
                Title*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="title" type="text" placeholder="Software Engineer">
            </div>
          </div>
          <div class="-mx-3 md:flex mb-6">
            <div class="md:w-full px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="application-link">
                Application Link*
              </label>
              <input class="w-full bg-gray-200 text-black border border-gray-200 rounded py-3 px-4 mb-3" id="application-link" type="text" placeholder="http://....">
            </div>
          </div>
          <div class="-mx-3 md:flex mb-2">
            <div class="md:w-1/2 px-3 mb-6 md:mb-0">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="location">
                Location*
              </label>
              <div>
                <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="location">
                  <option>Abuja</option>
                  <option>Enugu</option>
                  <option>Lagos</option>
                </select>
              </div>
            </div>
            <div class="md:w-1/2 px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="job-type">
                Job Type*
              </label>
              <div>
                <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="job-type">
                  <option>Full-Time</option>
                  <option>Part-Time</option>
                  <option>Internship</option>
                </select>
              </div>
            </div>
            <div class="md:w-1/2 px-3">
              <label class="uppercase tracking-wide text-black text-xs font-bold mb-2" for="department">
                Department*
              </label>
              <div>
                <select class="w-full bg-gray-200 border border-gray-200 text-black text-xs py-3 px-4 pr-8 mb-3 rounded" id="department">
                  <option>Engineering</option>
                  <option>Design</option>
                  <option>Customer Support</option>
                </select>
              </div>
            </div>
          </div>
          <div class="-mx-3 md:flex mt-2">
            <div class="md:w-full px-3">
              <button class="md:w-full bg-gray-900 text-white font-bold py-2 px-4 border-b-4 hover:border-b-2 border-gray-500 hover:border-gray-100 rounded-full">
                Button
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>

@endsection 