<script lang="ts">
    import Input from "../inputs";
    import Button from "../button/button.svelte";
</script>

<nav
    class="flex rounded-[20px] fixed top-0 w-full items-center min-h-32 pt-5 justify-between px-10"
>
    <a class="text-3xl" href="/">DBNB</a>
    <Input.text placeholder="SEARCH MY NEXT CAR" />
    <div>
        <Button>LOGIN</Button>
        <Button>REGISTER</Button>
    </div>
</nav>

<style>
</style>
