<script lang="ts">
    import Title from "../components/Title.svelte";

    export let message;
    let value: number = 0;
</script>

<div>
    <Title>Laravel, Svelte and Tailwind View :D</Title>
    <p class="text-2xl font-bold text-orange-500 text-center">{message}</p>
    <div class="mt-10 flex justify-center">
        <p class="text-2xl font-bold text-orange-500">{value}</p>
        <button
            class="mx-2 bg-slate-500 w-7 h-7 rounded text-white font-bold items-center"
            on:click={() => value++}>+</button
        >
    </div>
</div>
