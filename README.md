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

Data Usage Plan
---------------

The data stored in the json can be used to create location data based interactive graphical content using D3 or any other intuitive data visualization libraries. It may also be used in various other types of applications to provide heirachical location data.
