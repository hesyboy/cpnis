<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>CPNIS REMINDER PORTAL</title>
</head>
<body class="bg-gray-100">


    <style>
        .tags-input {
        display: flex;
        flex-wrap: wrap;
        background-color: #fff;
        border-width: 1px;
        border-radius: .25rem;
        padding-left: .5rem;
        padding-right: 1rem;
        padding-top: .5rem;
        padding-bottom: .25rem;
        }

        .tags-input-tag {
        display: inline-flex;
        line-height: 1;
        align-items: center;
        font-size: .875rem;
        background-color: #bcdefa;
        color: #1c3d5a;
        border-radius: .25rem;
        user-select: none;
        padding: .25rem;
        margin-right: .5rem;
        margin-bottom: .25rem;
        }

        .tags-input-tag:last-of-type {
        margin-right: 0;
        }

        .tags-input-remove {
        color: #2779bd;
        font-size: 1.125rem;
        line-height: 1;
        }

        .tags-input-remove:first-child {
        margin-right: .25rem;
        }

        .tags-input-remove:last-child {
        margin-left: .25rem;
        }

        .tags-input-remove:focus {
        outline: 0;
        }

        .tags-input-text {
        flex: 1;
        outline: 0;
        padding-top: .25rem;
        padding-bottom: .25rem;
        margin-left: .5rem;
        margin-bottom: .25rem;
        min-width: 10rem;
        }

        .py-16 {
        padding-top: 4rem;
        padding-bottom: 4rem;
    }
    </style>



    <div>
        @include('layouts.header')
    </div>
    <div>
        @yield('content')

    </div>


    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('dropdown', () => ({
                open: false,

                toggle() {
                    this.open = ! this.open
                },
            }))
        })
    </script>

    <script>
        function tagSelect() {
  return {
    open: false,
    textInput: '',
    tags: [],
    init() {
      this.tags = JSON.parse(this.$el.parentNode.getAttribute('data-tags'));
    },
    addTag(tag) {
      tag = tag.trim()
      if (tag != "" && !this.hasTag(tag)) {
        this.tags.push( tag )
      }
      this.clearSearch()
      this.$refs.textInput.focus()
      this.fireTagsUpdateEvent()
    },
    fireTagsUpdateEvent() {
      this.$el.dispatchEvent(new CustomEvent('tags-update', {
        detail: { tags: this.tags },
        bubbles: true,
      }));
    },
    hasTag(tag) {
      var tag = this.tags.find(e => {
        return e.toLowerCase() === tag.toLowerCase()
      })
      return tag != undefined
    },
    removeTag(index) {
      this.tags.splice(index, 1)
      this.fireTagsUpdateEvent()
    },
    search(q) {
      if ( q.includes(",") ) {
        q.split(",").forEach(function(val) {
          this.addTag(val)
        }, this)
      }
      this.toggleSearch()
    },
    clearSearch() {
      this.textInput = ''
      this.toggleSearch()
    },
    toggleSearch() {
      this.open = this.textInput != ''
    }
  }
}
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</body>
</html>
