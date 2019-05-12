<template>
  <sidebar-menu :menu="menu" />

</template>

<script>
    export default {
        data() {
            return {
                menu: [
                    {
                        header: true,
                        title: 'Main Navigation',
                        // component: componentName
                        // visibleOnCollapse: true
                    },
                    { // item
                        href: '/',
                        title: 'Dashboard',
                        icon: 'fa fa-user',
                        // disabled: true
                        /*
                        badge: {
                            text: 'new',
                            // class:''
                        }
                        */
                    },
                    { // item with child
                        href: '/artist',
                        title: 'Artist',
                        icon: 'fa fa-chart-area',
                        child: [
                            {
                                href: '/welcome',
                                title: 'Sub Link',
                            }
                        ]
                    },

                ]
            }
        }
    }
</script>
