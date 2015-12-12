# Prism

A small API that returns RGB colors as JSON.


### Endpoints

`GET` `api/color` Gets a randomly-generated color in RGB format. Adds it as new entry in DB.

### Color format

Colors are sent as RGB in the following format:

```json
{
  "rgb" : {
    "r" : 45,
    "g" : 234,
    "b" : 89
  }
}
```

### Roadmap

#### Next endpoint available

`GET` `api/colors/{N}` Fetch N colors, randomly.

Open `api/colors` to fetch colors from the history database.

### Technology stack

* Lumen 5.1


### License

This is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
