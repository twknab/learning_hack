Run a VM

## Vectors

In PHP, our primray method to store data is using an array. We also know about associative arrays. These also have some baked in ambiguity, thus in Hack we've developed some various data types under an umbrella guise we call "Collections".

Some different types of collections are:

1. Vectors - these are used as you would likely use a standard array data object. These give an index to each value that is stored within the vector, starting with the key of `0`. Anytime we want to simply store an array of data with an easy way to access it, we can use a vector{} collection. So essentially this is similar to if you were to create an object in JavaScript with each key value pair where the key is an integer starting at 0...n and each value is each array item.

Here's an example of an array in Hack

```hack
$a = Vector {'a', 'b', 'c'}
the `key` for `a` would be 0
..and 1 for `b`
..and 2 for `c` and so on
```

2. Maps - Maps are essentially what we'd nomrally use associative arrays for. It's just an easy way to define key value pair, and instead of using a standard array, we use a map{} collection. Maps are used to store something ordered, here's an example of a Map{} collection below.

```hack
$b = Map {
    "a" => 888,
    "b" => 23,
    "c" => 0,
}
```

This is similar to a PHP array written as: $b = { "a" => 888, "b" => 23, "c" => 0 }

3. Sets - Sets are a collection similar to an array, but use unique values. An example of a set in hack is as follows:

```hack
$c = Set { "A", "B", "C" }
```

Adding any additional value to the set would not be allowed as this is already exists.

4. Pairs - Pairs are objects used to represent exactly two values (any type). So if you have 2 things you need -- literally, a *pair* - you can store it in a Pair collection. Note that the `Pair` itself is immutable, so once created cannot be modified.

Here's an example of a pair in hack:

```hack
$d = Pair { "bar", 898339 }
```

**IMPORTANT NOTE** `Vector`, `Map` and `Set` objects all have immutable equivalents called `ImmVector`, `ImmMap` and `ImmSet`, where elements of an object cannot be added, removed or overwritten once created.



