<script lang="ts">
    export let type: "button" | "submit" = "button";
    export let sm: boolean = false;
</script>

<button class:sm class="rounded-full px-4 py-2 bg-black text-white w-full" {type}>
    <slot />
</button>

<style>
    .sm {
        @apply h-[55px] max-w-[150px] min-w-[130px] ;
    }
</style>
