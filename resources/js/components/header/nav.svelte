<script lang="ts">
    import Input from "../inputs";
    import Button from "../button/button.svelte";
</script>

<nav
    class="flex rounded-[20px] shadow-md shadow-slate-200 fixed top-0 w-full items-center min-h-32 py-9 justify-between px-14"
>
    <div class="w-full max-w-[300px]">
        <a class="text-4xl" href="/">DBNB</a>
    </div>
    <div class="w-full">
        <Input.text placeholder="SEARCH MY NEXT CAR" />
    </div>
    <div class="w-full flex justify-center px-10">
        <menu class="flex gap-x-8 uppercase">
            <a href="/">HOME</a>
            <a href="/about">ABOUT</a>
            <a href="/">COLLECTION</a>
        </menu>
    </div>
    <div class=" flex justify-end gap-x-7 w-full max-w-[400px]">
        <Button sm>LOGIN</Button>
        <Button sm>SIGN-IN</Button>
        <div></div>
    </div>
</nav>

<style>
</style>
