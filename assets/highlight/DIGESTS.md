## Subresource Integrity

If you are loading Highlight.js via CDN you may wish to use [Subresource Integrity](https://developer.mozilla.org/en-US/docs/Web/Security/Subresource_Integrity) to guarantee that you are using a legimitate build of the library.

To do this you simply need to add the `integrity` attribute for each JavaScript file you download via CDN. These digests are used by the browser to confirm the files downloaded have not been modified.

```html
<script
  src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/highlight.min.js"
  integrity="sha384-5xdYoZ0Lt6Jw8GFfRP91J0jaOVUq7DGI1J5wIyNi0D+eHVdfUwHR4gW6kPsw489E"></script>
<!-- including any other grammars you might need to load -->
<script
  src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.11.1/languages/go.min.js"
  integrity="sha384-HdearVH8cyfzwBIQOjL/6dSEmZxQ5rJRezN7spps8E7iu+R6utS8c2ab0AgBNFfH"></script>
```

The full list of digests for every file can be found below.

### Digests

```
sha384-gRTR/fmk+6+ygbihH/fJvHgmffnOrd/eO7DW5zgu1uN9GBohtDx+OBs0DI0ejigB /es/languages/bash.js
sha384-Pg7b9hYE6kefjcNqAabhv8jOLCVoZubUaM4bZFjUJd0CaaQ14ksDI0GVllMtAF4S /es/languages/bash.min.js
sha384-dGlJAOeF9W4Zdwt+V59AzWs+kT86GVgVxG2SldMZcNwThPSzc0Gtx6LekCH0t7es /es/languages/dos.js
sha384-GClxwhFSWyi58TL/Eu6ftCf/fsQtTyZrpLN+GhdaCqGnY46u9ECXsGFk0aRbD3hP /es/languages/dos.min.js
sha384-vZWLk+C+23/W/GAmv4PXkZSZo82LXul6DdSgWcMzutPxGltitIk38HyLrxRVsFvm /es/languages/ini.js
sha384-CVynu7LzwkkAUiajSi0jprssYhgg9Vi1WSd8iR84Vmi6JdRGq3DT4vvEfjzoxxOK /es/languages/ini.min.js
sha384-8CPWZxOnAso0ouSbSFnyhY7ibn8ApaI8a18uroiswlewY/QHKsx8n+yFwooe1cJA /es/languages/jboss-cli.js
sha384-AhwX6wPgJvIesTeqTwda/SmEe928MxabuP2v2HzBaZIlsu6usQWYUrlgyc30Arck /es/languages/jboss-cli.min.js
sha384-8CRS96Xb/ZkZlQU+5ffA03XTN6/xY40QAnsXKB0Y+ow1vza1LAkRNPSrZqGSNo53 /es/languages/json.js
sha384-UHzaYxI/rAo84TEK3WlG15gVfPk49XKax76Ccn9qPWYbUxePCEHxjGkV+xp9HcS/ /es/languages/json.min.js
sha384-i6sPjmXfHWLljAXTYYk0vBOwgsUnUKnKXKH41qzc9OMhaf5AFZqXH7azX4SYdUiR /es/languages/plaintext.js
sha384-OOrQLW97d+/1orj9gjftwbbQyV8LNAcgagqVKBhUYA08Hdi5w0p6VoB3yt2k7gnG /es/languages/plaintext.min.js
sha384-R7N9ng1N/Cb7RLskF1tB8AWD6kKnUs3LXqrJTj0aTGGXswS2sWq/XFUWPpEKSxqu /es/languages/powershell.js
sha384-GZl3J+HUi40wO5QngTvTpHXB0M2gGDnn9E/MyHRRS4VEWDNCS96bODclYTX3/JId /es/languages/powershell.min.js
sha384-9ECFzM+oWDye4s/MFx3QUXGo4mW43+SyLpWUDeQtWup6GZJ+KHFxVS89PmZt/fzl /es/languages/xml.js
sha384-PQrsaWeWrBiE1CFRw8K335CaJuQRTjDGm73vn8bXvlwaw6RyqWObdvMTBS8B75NN /es/languages/xml.min.js
sha384-7HTgKp/l2rzlyrh5vUfbfZVy+Wx1lKO4iGmfqvakienApv21u55lo+Vi+iVg4jY0 /es/languages/yaml.js
sha384-4smueUtgWTorlNLbaQIawnVCcIAuw82NetPOGWN5PbZT/pMr0rjvZXj0EUzJV1nr /es/languages/yaml.min.js
sha384-Jrkpn2hK0TY04skYBXB9fj7mMpKYy7g726cPwXGXf6mdBXnFlTDXFduxikMCRXT7 /languages/bash.js
sha384-BbT8tZtvkh8HPXIvL5RtzuljBwI3gR5KIdYxZyYSyI5C/+KNAGdzAiexvmxuroag /languages/bash.min.js
sha384-yD9ZkKOazo9eQGQfNtC0Jl+jhwoXY0nMIQrumVTCyCmaEkB8qNehgSM4+P7mVaW5 /languages/dos.js
sha384-s10f61nScVyophx7eDq30HRz4VUaiwMkHFL+yAjwFUh22Dw6ArIevPx07+r0Dgoj /languages/dos.min.js
sha384-izwcylRNWmKKRcyCyrYZyNQekUCyR7Fh1x8nYWNCRJoRDU5JXv6TcqlP4C+4MfIf /languages/ini.js
sha384-NrmnsdarwteQHPGjt70kaQTi1KE0XfOJNX9/VJSg6wWwU6U2nPzjl3iWkgU1cvyx /languages/ini.min.js
sha384-lQgHrtx7x8SxGk1nYx289Tdwkf5+vn6r0+lL70G3gCVw1E0SHBI3ZVv8CckjcZ4e /languages/jboss-cli.js
sha384-9TY5qMANpFAepJtXQhSDxLfCBvsomeAr+sp0iYKmvF2J9rIEjJquOM07ktbHEt4t /languages/jboss-cli.min.js
sha384-pUlqdjoNePvHvdi7GVKJJnh/P2T3EvXXodl5j0JtTkbNC4DRH7gwGbcHFa84bFOP /languages/json.js
sha384-3C+cPClJZgjKFYAb0bh35D7im2jasLzgk9eRix3t1c5pk1+x6b+bHghWcdrKwIo3 /languages/json.min.js
sha384-MZKv9uidO1+VnHz8xWxPv6ACuLO5t823eanvTcKYnmi/ocdVYD8zKZNTxmF0nKEM /languages/plaintext.js
sha384-Z9EdtPaC8UiXHEq1WuQTdvqT+FwjLwaVTIwTCZW/dGfiU9nbF8Shvltrhqtw83Qb /languages/plaintext.min.js
sha384-IovgHYXogGBldWibmA9aDifITNGdjEeaRUjvsJ3l4Rf4LVusXXcOZUCSxBEhXWqY /languages/powershell.js
sha384-q/8iVbv95DiFN+l7qeoBwJ0Wju7gozJemMfG3DdxiOR8CfA/2dKvKA3W5t4l/n9t /languages/powershell.min.js
sha384-Pgzg6a405W6U1xFjjSs5i8d7V81Tmt/TYn8HFOa+u1psDc8cbs8nC7BuyNXbWWRK /languages/xml.js
sha384-FQjSArDMJE4WMAJGcCNAV+IXIOljcIxM3UFAD2vxjedWmBnnDaAyqRG7AQHf/uM/ /languages/xml.min.js
sha384-6GXi9L5BnOWPU6bzwYL78Zscp23qyDdMLZpZvp4mLzvF2qt0eY/DfsPHiFVXq4hv /languages/yaml.js
sha384-A/iMReLA0Bo3tLydBIoOQXQzYnrwL90jkHYUubrtERUGCbIuU7U0EHge0Xd2s5sr /languages/yaml.min.js
sha384-KBNKM9mL/xuHzZKRCl4hhOxWPqeWIKiwyoY3iHSV5t4QOxRCD073ZEzCDQ1hClwm /highlight.js
sha384-XEEYrnvlxLjVy6ulFjvdd/e/apib3IikOTfXXYzDIjJ6ZmVw6kgLhggUGa/6Nh9x /highlight.min.js
```

