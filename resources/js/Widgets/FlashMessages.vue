<template>
  <div>
  
    <div v-if="$page.props.flash.error && show" id="alert-error" class="rounded-md bg-blue-50 p-4 max-w-2xl mt-4">
      <div class="flex">
        <div class="flex-shrink-0">
          <CheckCircleIcon class="h-5 w-5 text-blue-400" aria-hidden="true" />
        </div>
        <div class="ml-3">
          <p class="text-sm font-medium text-blue-800">{{ $page.props.flash.error }}</p>
        </div>
        <div class="ml-auto pl-3">
          <div class="-mx-1.5 -my-1.5">
            <button type="button" @click="show = false" class="inline-flex rounded-md  p-1.5 text-blue-500 hover:bg-blue-100 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-green-50">
              <span class="sr-only">Dismiss</span>
              <XMarkIcon class="h-5 w-5" aria-hidden="true" />
            </button>
          </div>
        </div>
      </div>
    </div>
    
    <div v-if="$page.props.flash.success && show" id="alert-success" class="rounded-md bg-green-50 p-4 max-w-2xl mt-4">
      <div class="flex">
        <div class="flex-shrink-0">
          <CheckCircleIcon class="h-5 w-5 text-green-400" aria-hidden="true" />
        </div>
        <div class="ml-3">
          <p class="text-sm font-medium text-green-800">{{ $page.props.flash.success }}</p>
        </div>
        <div class="ml-auto pl-3">
          <div class="-mx-1.5 -my-1.5">
            <button type="button" @click="show = false" class="inline-flex rounded-md bg-green-50 p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:ring-2 focus:ring-green-600 focus:ring-offset-2 focus:ring-offset-green-50">
              <span class="sr-only">Dismiss</span>
              <XMarkIcon class="h-5 w-5" aria-hidden="true" />
            </button>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</template>

<script setup>
  import { CheckCircleIcon, XMarkIcon } from '@heroicons/vue/20/solid'
</script>

<script>
  export default {
    data() {
      return {
        show: true,
      }
    },
    watch: {
      '$page.props.flash': {
        handler() {
          this.show = true
        },
        deep: true,
      },
    },
  }
</script>



