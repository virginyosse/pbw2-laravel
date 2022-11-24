



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Pengguna') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <a href="{{ route('koleksiTambah') }}" class="inline-flex items-center px-4 py-2 mb-4 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">
                        Tambah Pengguna
                    </a>
                    <table class = "w-full table table-striped table-hover" id="datatable">
                        <thead>
                        <tr>
                                <th>Id</th>
                                <th>Username</th>
                                <th>fullname</th>
                                <th>email</th>
                                <th>address</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($user as $user)
                            <tr>
                                <th scope="row">{{ $user -> id }}</th>
                                <th>{{ $user -> username}}</th>
                                <th>{{ $user -> fullname}}</th>
                                <th>{{ $user -> email}}</th>
                                <th>{{ $user -> address}}</th>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<script type="text/javascript">
    $(document).ready(function(){
        $('#datatable').DataTable({
            ajax:'{{ route("getAllCollections")}}',
            serverSide: false,
            processing: true,
            deferRender: true,
            type: 'GET',
            destroy: true,
            columns:[
                {data:'id',name:'id'},
                {data:'username',name:'username'},
                {data:'fullname',name:'fullname'},
                {data:'email',name:'email'},
                {data:'address',name:'address'},
        });
    });
</script>
