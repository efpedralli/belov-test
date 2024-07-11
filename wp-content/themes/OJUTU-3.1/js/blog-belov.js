wp.blocks.registerBlockType('ojutu/blog-belov', {
    title: 'Blog Belov',
    icon: 'media-document',
    category: 'widgets',
    edit: function() {
        return wp.element.createElement('div', {}, 'Blog Belov Preview');
    },
    save: function() {
        return null;
    },
});