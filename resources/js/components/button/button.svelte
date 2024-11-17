<script lang="ts">
    export let type: "button" | "submit" = "button";
</script>

<button {type}>
    <slot />
</button>
