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
                        title: 'Thêatre',
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
                        title: 'Artists',
                        icon: 'fa fa-home',
                        child: [
                            {
                                href: '/Welome/Welome',
                                title: 'Sub Link',
                            }
                        ]
                    },

                ]
            }
        }
    }
</script>
