<x-layout>
    <div class="flex min-h-[calc(100dvh-4rem)] items-center justify-center px-4">
        <div class="w-full max-w-md">
            <div class="text-center">
                <h1 class="text-3x1 font-bold tracking-tight" style="font-size: 24px;">Register Now</h1>
                <p class="text-muted-foreground mt-1">
                    <small>Start your ideas</small>
                </p>
            </div>

            <form action="/register" method="POST" class="mt-10 space-y-4">
                @csrf

                <div class="space-y-2">
                    <label for="name" class="label">Name</label>
                    <input type="text" class="input" id="name" name="name">
                </div>

                <div class="space-y-2">
                    <label for="email" class="label">Email</label>
                    <input type="email" class="input" id="email" name="email">
                </div>

                <div class="space-y-2">
                    <label for="password" class="label">Password</label>
                    <input type="password" class="input" id="password" name="password">
                </div>

                <button type="submit" class="btn mt-2 h-12">Create Account</button>

            </form>
        </div>
    </div>
</x-layout>
