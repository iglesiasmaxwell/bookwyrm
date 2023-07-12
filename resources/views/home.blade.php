<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>bookwyrm, Web-based Book Tracker</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">

        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>
        <style>
            ::selection{
                color: #e2e8f0;
                background-color: #334155;
            }
        </style>

        <script src="https://cdn.tailwindcss.com"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script>
            const showMenu = (canvasId) =>{
            canvas = document.getElementById(canvasId)
                if(canvasId){
                    canvas.classList.toggle('right-0')
                }
                }
        </script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


        <script>
            tailwind.config = {
                theme: {
                    fontFamily: {
                        'logo': ['Righteous, sans-serif'],
                        'body': ['DM Sans, sans-serif'],
                    }
                }
            }
        </script>

    </head>
<body class="antialiased bg-slate-200">
    
    <section>
        <nav class="navbar fixed-top bg-slate-500/80 d-lg-none d-md-block rounded-bottom-2">
            <div class="container-fluid">
                <a href="{{ url('/home') }}" class="font-logo text-3xl mx-3 text-slate-200 hover:text-slate-100 focus:text-slate-100 navbar-brand"><i class="fa fa-bookmark" aria-hidden="true"></i> bookwyrm</a>
                <div class="fa fa-bars fa-2x text-slate-200 hover:text-slate-100 focus:text-slate-100 navbar-toggler border-0 cursor-pointer" onclick="showMenu('offcanvas')"></div>
                <div class="fixed top-[3.64rem] right-[-100%] bg-slate-300/95 max-h-120 rounded-s-md duration-200 text-end" id="offcanvas">
                    <div class="py-2 px-6">
                        <div class="leading-3 overflow-y-auto font-body font-medium list-group rounded-0">
                            <a href="{{ url('/home/reading') }}" class="text-lg text-slate-700 hover:text-slate-600 navbar-text list-group-item-unstyled">Reading</a>
                            <br>
                            <a href="{{ url('/home/planning') }}" class="text-lg text-slate-700 hover:text-slate-600 navbar-text list-group-item-unstyled">Planning</a>
                            <br>
                            <a href="{{ url('/home/completed') }}" class="text-lg text-slate-700 hover:text-slate-600 navbar-text list-group-item-unstyled">Completed</a>
                        </div>
                    </div>
                    <hr class="border-2 border-slate-400/50">
                    <div class="py-2 px-6">
                        <div class="leading-3 overflow-y-auto font-body font-medium list-group">
                        <a href="{{ url('/home/libraries') }}" class="text-lg text-slate-700 hover:text-slate-600 navbar-text list-group-item-unstyled">Net Library</a>
                        <br>
                        <a href="{{ url('/home/about') }}" class="text-lg text-slate-700 hover:text-slate-600 navbar-text list-group-item-unstyled">About</a>
                    </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="row g-0">
            <div class="col-lg-4 col-xl-3 bg-gradient-to-b from-slate-300 h-full d-none d-lg-block">
                <div class="py-4 pl-10">
                    <div class="fixed-top bg-slate-300/75 pt-3 pb-2.5 pl-10 col-3 rounded-bottom-4">
                        <a href="{{ url('/home') }}" class="font-logo text-4xl text-slate-700 hover:text-slate-600 navbar-brand"><i class="fa fa-bookmark" aria-hidden="true"></i> bookwyrm</a>
                    </div>
                    <div class="mt-16 leading-3 overflow-y-auto font-body font-medium list-group rounded-0">
                        <a href="{{ url('/home/reading') }}" class="text-lg text-slate-700 hover:text-slate-600 navbar-text list-group-item-unstyled">Reading</a>
                        <br>
                        <a href="{{ url('/home/planning') }}" class="text-lg text-slate-700 hover:text-slate-600 navbar-text list-group-item-unstyled">Planning</a>
                        <br>
                        <a href="{{ url('/home/completed') }}" class="text-lg text-slate-700 hover:text-slate-600 navbar-text list-group-item-unstyled">Completed</a>
                    </div>
                </div>
                <hr class="border-2 border-slate-400/50">
                <div class="py-4 pl-10">
                    <div class="leading-3 overflow-y-auto font-body font-medium list-group">
                    <a href="{{ url('/home/libraries') }}" class="text-lg text-slate-700 hover:text-slate-600 navbar-text list-group-item-unstyled">Net Library</a>
                    <br>
                    <a href="{{ url('/home/about') }}" class="text-lg text-slate-700 hover:text-slate-600 navbar-text list-group-item-unstyled">About</a>
                </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-8 col-xl-9 h-screen">
                <nav class="navbar">
                    <div class="absolute fixed top-5 right-7 d-none d-xl-block">
                      <div>
                        <a href="{{ url('/home/add') }}" class="p-[15px] border-2 border-slate-500 fa fa-plus fa-lg text-slate-500 hover:text-slate-800 hover:bg-slate-500 rounded-lg"></a>
                      </div>
                    </div>
                </nav>
                <div class="xl:mt-20 pb-20 xl:pb-4">
                    <h5 class="font-body font-semibold text-2xl mx-4 mt-16 lg:mt-10 xl:mt-16 text-slate-700 hover:text-slate-700 navbar-brand">Reading</h5>
                @forelse ($book_info_read as $index => $item)
                <div class="bg-slate-300/50 mx-7 my-3 font-body rounded-md shadow-md">
                    <div class="py-3">
                      <div class="d-flex w-100 justify-content-between text-slate-700 px-3">
                        <h5 class="mb-2.5 text-lg font-medium capitalize">{{ $item->title }}</h5>
                        <small class="uppercase font-bold text-xs">{{ $item->condition }}</small>
                      </div>
                      <div class="d-flex w-100 justify-content-between text-slate-700 px-3">
                        @if ($item->subtitle==null)
                        <small class="mb-2 text-sm italic">{{ $item->author }}</small>
                        @else
                        <p class="mb-2.5 text-base">{{ $item->subtitle }}</p>
                        @endif
                        <small class="text-sm">{{ $item->year }}</small>
                      </div>
                      <div class="d-flex w-100 justify-content-between text-slate-700 px-3">
                        @if ($item->subtitle==null)
                        <p class="text-base">{{ $item->subtitle }}</p>
                        <h5></h5>
                            @else
                            <small class="mb-2 text-sm italic">{{ $item->author }}</small>
                            @endif
                        <small class="mb-2 text-sm">
                            @if ($item->pages==null)
                            @else
                              <h5>{{ $item->pages }} Pages</h5>
                            @endif
                          </small>
                      </div>
                      <div class="d-flex w-100 justify-content-end text-slate-700 px-3">
                        <small class="text-sm">
                            @if ($item->rating>0)
                            @for ($i=0;$i<5;$i++)
                                @if ($i<$item->rating)
                                    <i class="fa fa-star text-slate-700" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-star-o text-slate-700" aria-hidden="true"></i>                               
                                @endif
                            @endfor
                            @endif
                        </small>
                      </div>
                    </div>
                    <div class="d-flex">
                        <a href="{{ route('edit.book', $item->id) }}" class="bg-slate-300/75 hover:bg-slate-300/25 focus:bg-slate-300/25 py-1.5 px-2 border-r border-t border-slate-400/25 w-1/2 rounded-bl-md">
                          <h5 class="font-medium"><i class="fa fa-pencil fa-fw text-slate-700 lg:hover:text-slate-700/50 float-start"></i></h5>
                        </a>
                        <form action="{{ route('delete.book', $item->id) }}" method="POST" class="bg-slate-300/75 hover:bg-slate-300/25 focus:bg-slate-300/25 pt-1.5 px-2 border-t border-slate-400/25 w-1/2 rounded-br-md cursor-pointer">
                            @csrf
                            @method('delete')
                            <button type="submit" class="w-full">
                              <h5 class="font-medium"><i class="fa fa-ban fa-fw text-slate-700 lg:hover:text-slate-700/50 float-end"></i></h5>
                            </button>
                          </form>
                      </div>
                  </div>
                  @empty
                  <p class="flex justify-content-center align-self font-body text-xl mt-6">There's no book on reading</p>
                  @endforelse

                  <h5 class="font-body font-semibold text-2xl mx-4 mt-16 text-slate-700 hover:text-slate-700 navbar-brand">Planning</h5>
                @forelse ($book_info_plan as $index => $item)
                <div class="bg-slate-300/50 mx-7 my-3 font-body rounded-md shadow-md">
                    <div class="py-3">
                      <div class="d-flex w-100 justify-content-between text-slate-700 px-3">
                        <h5 class="mb-2.5 text-lg font-medium capitalize">{{ $item->title }}</h5>
                        <small class="uppercase font-bold text-xs">{{ $item->condition }}</small>
                      </div>
                      <div class="d-flex w-100 justify-content-between text-slate-700 px-3">
                        @if ($item->subtitle==null)
                            <small class="mb-2 text-sm italic">{{ $item->author }}</small>
                            @else
                            <p class="mb-2.5 text-base">{{ $item->subtitle }}</p>
                            @endif
                        <small class="text-sm">{{ $item->year }}</small>
                      </div>
                      <div class="d-flex w-100 justify-content-between text-slate-700 px-3">
                        @if ($item->subtitle==null)
                        <h5></h5>
                            @else
                            <small class="mb-2 text-sm italic">{{ $item->author }}</small>
                            @endif
                        <small class="mb-2 text-sm">
                            @if ($item->pages==null)
                            @else
                              <h5>{{ $item->pages }} Pages</h5>
                            @endif
                          </small>
                      </div>
                      <div class="d-flex w-100 justify-content-end text-slate-700 px-3">
                        <small class="text-sm">
                            @if ($item->rating>0)
                            @for ($i=0;$i<5;$i++)
                                @if ($i<$item->rating)
                                    <i class="fa fa-star text-slate-700" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-star-o text-slate-700" aria-hidden="true"></i>                               
                                @endif
                            @endfor
                            @endif
                        </small>
                      </div>
                    </div>
                    <div class="d-flex">
                        <a href="{{ route('edit.book', $item->id) }}" class="bg-slate-300/75 hover:bg-slate-300/25 focus:bg-slate-300/25 py-1.5 px-2 border-r border-t border-slate-400/25 w-1/2 rounded-bl-md">
                          <h5 class="font-medium"><i class="fa fa-pencil fa-fw text-slate-700 lg:hover:text-slate-700/50 float-start"></i></h5>
                        </a>
                        <form action="{{ route('delete.book', $item->id) }}" method="POST" class="bg-slate-300/75 hover:bg-slate-300/25 focus:bg-slate-300/25 pt-1.5 px-2 border-t border-slate-400/25 w-1/2 rounded-br-md cursor-pointer">
                            @csrf
                            @method('delete')
                            <button type="submit" class="w-full">
                              <h5 class="font-medium"><i class="fa fa-ban fa-fw text-slate-700 lg:hover:text-slate-700/50 float-end"></i></h5>
                            </button>
                          </form>
                      </div>
                  </div>
                  @empty
                  <p class="flex justify-content-center align-self font-body text-xl mt-6">There's no book on planning</p>
                  @endforelse

                  <h5 class="font-body font-semibold text-2xl mx-4 mt-16 text-slate-700 hover:text-slate-700 navbar-brand">Completed</h5>
                @forelse ($book_info_end as $index => $item)
                <div class="bg-slate-300/50 mx-7 mt-3 font-body rounded-md shadow-md">
                    <div class="py-3">
                      <div class="d-flex w-100 justify-content-between text-slate-700 px-3">
                        <h5 class="mb-2.5 text-lg font-medium capitalize">{{ $item->title }}</h5>
                        <small class="uppercase font-bold text-xs">{{ $item->condition }}</small>
                      </div>
                      <div class="d-flex w-100 justify-content-between text-slate-700 px-3">
                        @if ($item->subtitle==null)
                            <small class="mb-2 text-sm italic">{{ $item->author }}</small>
                            @else
                            <p class="mb-2.5 text-base">{{ $item->subtitle }}</p>
                            @endif
                        <small class="text-sm">{{ $item->year }}</small>
                      </div>
                      <div class="d-flex w-100 justify-content-between text-slate-700 px-3">
                        @if ($item->subtitle==null)
                        <h5></h5>
                            @else
                            <small class="mb-2 text-sm italic">{{ $item->author }}</small>
                            @endif
                        <small class="mb-2 text-sm">
                            @if ($item->pages==null)
                            @else
                              <h5>{{ $item->pages }} Pages</h5>
                            @endif
                          </small>
                      </div>
                      <div class="d-flex w-100 justify-content-end text-slate-700 px-3">
                        <small class="text-sm">
                            @if ($item->rating>0)
                            @for ($i=0;$i<5;$i++)
                                @if ($i<$item->rating)
                                    <i class="fa fa-star text-slate-700" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-star-o text-slate-700" aria-hidden="true"></i>                               
                                @endif
                            @endfor
                            @endif
                        </small>
                      </div>
                    </div>
                    <div class="d-flex">
                        <a href="{{ route('edit.book', $item->id) }}" class="bg-slate-300/75 hover:bg-slate-300/25 focus:bg-slate-300/25 py-1.5 px-2 border-r border-t border-slate-400/25 w-1/2 rounded-bl-md">
                          <h5 class="font-medium"><i class="fa fa-pencil fa-fw text-slate-700 lg:hover:text-slate-700/50 float-start"></i></h5>
                        </a>
                        <form action="{{ route('delete.book', $item->id) }}" method="POST" class="bg-slate-300/75 hover:bg-slate-300/25 focus:bg-slate-300/25 pt-1.5 px-2 border-t border-slate-400/25 w-1/2 rounded-br-md cursor-pointer">
                            @csrf
                            @method('delete')
                            <button type="submit" class="w-full">
                              <h5 class="font-medium"><i class="fa fa-ban fa-fw text-slate-700 lg:hover:text-slate-700/50 float-end"></i></h5>
                            </button>
                          </form>
                      </div>
                  </div>
                  @empty
                  <p class="flex justify-content-center align-self font-body text-xl mt-6 pb-6">There's no book on completed</p>
                  @endforelse
                </div>
                  <div class="fixed bottom-5 right-7 d-block d-xl-none">
                    <div>
                      <a href="{{ url('/home/add') }}" class="p-[15px] border-2 border-slate-500 fa fa-plus fa-lg text-slate-500 hover:text-slate-800 hover:bg-slate-500 rounded-lg"></a>
                  </div>
                  </div>
            </div>
        </div>
    </section>
</body>
</html>