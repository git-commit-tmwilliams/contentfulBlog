// add the category field as Symbol
module.exports = function (migration) {
  // Create a new category field in the blog post content type.
  const blogPost = migration.editContentType('blogPost');
  blogPost.createField('category')
    .name('Category')
    .type('Symbol');
}