<nav class="
  relative
  w-full
  flex flex-wrap
  items-center
  justify-between
  py-4
  bg-white
  text-gray-500
  hover:text-gray-900
  focus:text-gray-900
  shadow-lg
  navbar navbar-expand-lg navbar-light
  ">
  <div class="container mx-auto w-full flex flex-wrap items-center justify-between px-6">
  <button class="
      navbar-toggler
      text-gray-500
      border-0
      hover:shadow-none hover:no-underline
      py-2
      px-2.5
      bg-transparent
      focus:outline-none focus:ring-0 focus:shadow-none focus:no-underline
    " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars"
    class="w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
    <path fill="currentColor"
      d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z">
    </path>
  </svg>
  </button>
  <div class="collapse navbar-collapse flex-grow items-center" id="navbarSupportedContent">
  <a class="
        flex
        flex-col
        items-center
        text-gray-900
        hover:text-gray-900
        focus:text-gray-900
        mt-2
        lg:mt-0
        mr-4
      " href="/">

    <div class="text-3xl font-bold text-purple-900">CPNIS</div>
    <hr>
    <div class="text-sm text-gray-400">NOTIFICATION PORTAL(1.0)</div>
  </a>
  <!-- Left links -->
  <ul class="navbar-nav flex flex-col pl-0 list-style-none mr-auto">
    <li class="nav-item p-2">
      <a class="nav-link text-gray-500 hover:text-gray-900 focus:text-gray-900 p-0" href="{{route('index')}}">Dashboard</a>
    </li>
    <li class="nav-item p-2">
        <a class="nav-link text-gray-500 hover:text-gray-900 focus:text-gray-900 p-0" href="{{route('documents.index')}}">Documents</a>
    </li>
    <li class="nav-item p-2">
        <a class="nav-link text-gray-500 hover:text-gray-900 focus:text-gray-900 p-0" href="{{route('tasks.index')}}">Tasks</a>
    </li>

      <li class="nav-item p-2">
        <a class="nav-link text-gray-500 hover:text-gray-700 focus:text-gray-900 p-0" href="{{route('notifications.index')}}">Notifications</a>
      </li>
    <li class="nav-item p-2">
      <a class="nav-link text-gray-500 hover:text-gray-900 focus:text-gray-900 p-0" href="#">Users</a>
    </li>
    <li class="nav-item p-2 dropdown relative">
        <a class="dropdown-toggle nav-link text-gray-500 hover:text-gray-900 focus:text-gray-900 p-0 flex items-center gap-1"
        id="dropdownMenuButton2"
        data-bs-toggle="dropdown"
        aria-expanded="false"
         href="#">
         <span>System Settings</span>
         <i class="fas fa-angle-down text-sm mt-1"></i>
         <ul
        class="
          dropdown-menu
          min-w-max
          absolute
          hidden
          bg-white
          text-base
          z-50
          float-left
          py-2
          list-none
          text-left
          rounded-lg
          shadow-lg
          mt-1
          hidden
          m-0
          bg-clip-padding
          border-none
        "
        aria-labelledby="dropdownMenuButton2"
      >
        <li>
          <a
            class="
              dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              bg-transparent
              text-gray-700
              hover:bg-gray-100
            "
            href="#"
            >User Roles</a
          >
        </li>
        <li>
          <a
            class="
              dropdown-item
              text-sm
              py-2
              px-4
              font-normal
              block
              w-full
              whitespace-nowrap
              bg-transparent
              text-gray-700
              hover:bg-gray-100
            "
            href="#"
            >Email Settings</a
          >
        </li>
        <li>
            <a
              class="
                dropdown-item
                text-sm
                py-2
                px-4
                font-normal
                block
                w-full
                whitespace-nowrap
                bg-transparent
                text-gray-700
                hover:bg-gray-100
              "
              href="#"
              >Notification Settings</a
            >
          </li>
          <li>
            <a
              class="
                dropdown-item
                text-sm
                py-2
                px-4
                font-normal
                block
                w-full
                whitespace-nowrap
                bg-transparent
                text-gray-700
                hover:bg-gray-100
              "
              href="#"
              >Document Types</a
            >
          </li>
      </ul>
      </li>
    <li class="nav-item p-2">
      <a class="nav-link text-gray-500 hover:text-gray-900 focus:text-gray-900 p-0" href="#">Projects</a>
    </li>
  </ul>
  <!-- Left links -->
  </div>
  <!-- Collapsible wrapper -->

  <!-- Right elements -->
  <div class="flex items-center relative">
  <!-- Icon -->

  {{-- <div class="dropdown relative">
    <a class="
          text-gray-500
          hover:text-gray-700
          focus:text-gray-700
          mr-4
          dropdown-toggle
          hidden-arrow
          flex items-center
        " href="#" id="dropdownMenuButton1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell"
        class="w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path fill="currentColor"
          d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z">
        </path>
      </svg>
      <span class="text-white bg-red-700 absolute rounded-full text-xs -mt-2.5 ml-2 py-0 px-1.5">1</span>
    </a>
    <ul class="
      dropdown-menu
      min-w-max
      absolute
      hidden
      bg-white
      text-base
      z-50
      float-left
      py-2
      list-none
      text-left
      rounded-lg
      shadow-lg
      mt-1
      hidden
      m-0
      bg-clip-padding
      border-none
      left-auto
      right-0
    " aria-labelledby="dropdownMenuButton1">
      <li>
        <a class="
          dropdown-item
          text-sm
          py-2
          px-4
          font-normal
          block
          w-full
          whitespace-nowrap
          bg-transparent
          text-gray-700
          hover:bg-gray-100
        " href="#">Action</a>
      </li>
      <li>
        <a class="
          dropdown-item
          text-sm
          py-2
          px-4
          font-normal
          block
          w-full
          whitespace-nowrap
          bg-transparent
          text-gray-700
          hover:bg-gray-100
        " href="#">Another action</a>
      </li>
      <li>
        <a class="
          dropdown-item
          text-sm
          py-2
          px-4
          font-normal
          block
          w-full
          whitespace-nowrap
          bg-transparent
          text-gray-700
          hover:bg-gray-100
        " href="#">Something else here</a>
      </li>
    </ul>
  </div> --}}
  <div class="dropdown relative">
    <a class="dropdown-toggle flex items-center hidden-arrow" href="#" id="dropdownMenuButton2" role="button"
      data-bs-toggle="dropdown" aria-expanded="false">
      <span class="mx-3">User Name</span>
      <img src="https://mdbootstrap.com/img/new/avatars/2.jpg" class="rounded-full"
        style="height: 40px; width: 40px" alt="" loading="lazy" />

    </a>
    <ul class="
    dropdown-menu
    min-w-max
    absolute
    hidden
    bg-white
    text-base
    z-50
    float-left
    py-2
    list-none
    text-left
    rounded-lg
    shadow-lg
    mt-1
    hidden
    m-0
    bg-clip-padding
    border-none
    left-auto
    right-0
  " aria-labelledby="dropdownMenuButton2">
      <li>
        <a class="
        dropdown-item
        text-sm
        py-2
        px-4
        font-normal
        block
        w-full
        whitespace-nowrap
        bg-transparent
        text-gray-700
        hover:bg-gray-100
      " href="#">Edit Profile</a>
      </li>
      <li>
        <a class="
        dropdown-item
        text-sm
        py-2
        px-4
        font-normal
        block
        w-full
        whitespace-nowrap
        bg-transparent
        text-gray-700
        hover:bg-gray-100
      " href="#">Exit</a>
      </li>
    </ul>
  </div>
  </div>
  <!-- Right elements -->
  </div>
</nav>

