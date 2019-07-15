// transformEntries function takes each entry for a content type, extracts the content from the specified source fields "from", and applies a transformation function before populating values for the destination "to" fields
module.exports = function (migration) {
  // Simplistic function deducing a category from a tag name.
  const categoryFromTags = (tagList) => {
    if (tagList.includes('javascript')) {
      return 'Development'
    }
    return 'General'
  }

  // Derives categories based on tags and links these back to blog post entries.
  migration.transformEntries({
    // Start from blog post's tags field
    contentType: 'blogPost',
    from: ['tags'],
    // We'll only create a category using a name for now.
    to: ['category'],
    transformEntryForLocale: async (from, locale) => {
      return {
        category: categoryFromTags(from.tags[locale])
      }
    }
  })
}