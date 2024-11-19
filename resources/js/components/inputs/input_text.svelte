<script lang="ts">
    export let id: string = "";
    export let value: string = "";
    export let placeholder: string = "";
</script>

<input
    type="text"
    class="border uppercase border-[#B8B8B8] rounded-full font-jost max-w-[560px] min-w-[200px] min-h-[70px] w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline placeholder:text-center"
    bind:value
    {id}
    {placeholder}
/>
