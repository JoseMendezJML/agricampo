<nav class="bg-white shadow-sm border-bottom">

    <div class="container py-3">


        <div class="d-flex justify-content-between align-items-center">


            <a href="{{ route('dashboard') }}" 
               class="text-decoration-none">

                <h3 class="fw-bold text-success mb-0">
                    
                </h3>

            </a>



            <div class="d-flex align-items-center">


                <span class="me-3 text-secondary">

                    👤 {{ Auth::user()->name }}

                </span>



                <form method="POST" action="{{ route('logout') }}">

                    @csrf


                    <button class="btn btn-outline-danger btn-sm">

                        Cerrar sesión

                    </button>


                </form>


            </div>


        </div>


    </div>

</nav>