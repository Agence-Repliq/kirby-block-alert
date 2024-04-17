<template>
    <div class="k-block-alert">
          <k-icon
                class="k-block-type-box-icon"
                type="bolt"
            />
        <k-writer
            class="label"
            :marks="bodyField.marks"
            :value="content.body"
            :placeholder="bodyField.placeholder || 'Enter some stuff…'"
            @input="update({ body: $event })"
        />
    </div>
</template>
<script>

export default { 
    computed: {
        bodyField() {
            return this.field("body");
        }
    },

}

</script>
<style lang="scss">
    .k-block-alert {
        display: flex;
        align-items: flex-start;
        background: var(--color-background);
        color: var(--color-text);
        padding: 1rem .5rem;
        line-height: 1.5rem;

        .k-block-type-box-icon {
            height: 1.5rem;
            width: 1.5rem;
            margin-right: .5rem;
            margin-top: .1rem;
        }
    }
   
</style>



