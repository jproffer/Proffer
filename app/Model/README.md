#MODELS
Proffer currently offers two different model systems - built-in and third-party.  They can run side-by-side, but typically you want to choose one modeling method.

## Using built-in modeling 
Proffer includes a simple, easy to use modeling system, with an example model for reference. 

## Using Propel
Propel is the current preferred ORM.  It is not included in the project, and must be installed via composer.  An  example db is included (schema.xml), illustrating how to build clean namespaced models with Propel.
If Propel is used, you should delete the Model\Core and Model\Interfaces folders.
