<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1>Novo Usuário</h1>

                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf()
                        <input type="text" name="name" placeholder="Nome">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Senha">
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
