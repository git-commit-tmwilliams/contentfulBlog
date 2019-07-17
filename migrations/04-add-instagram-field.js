// add the Instagram field as Symbol
module.exports = function (migration) {
  // Create a new Instagram field in the person content type.
  const person = migration.editContentType('person');
  person.createField('instagram')
    .name('Instagram')
    .type('Symbol');
}