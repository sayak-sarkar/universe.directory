Universe.Directory
==================

Sorted JSON heirarchical data list of all places in the universe, starting with the earth and all its continents and countries.

Data Structure
--------------

The initial directory structure consists of a single JSON file containing a heirarchically sorted list of all continents and countries in the world in a stepped one to many bottom-up tree structure. The data is stored in the following format:-
```javascript
{
  "name": "Location name",
  "parent": "Parent Location name"
} 
```
