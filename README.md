[![Latest Stable Version](https://poser.pugx.org/cvette/neos-code-block/v/stable)](https://packagist.org/packages/cvette/neos-code-block)
[![Total Downloads](https://poser.pugx.org/cvette/codeblock/downloads)](https://packagist.org/packages/cvette/codeblock) 
[![License](https://poser.pugx.org/cvette/codeblock/license)](https://packagist.org/packages/cvette/codeblock)

# Code block Neos plugin
This plugin adds a nodetype that allows you to display blocks of code with syntax highlighting for a wide range of languages. The highlighing is done on the server-side by using the [GeSHi](http://qbnz.com/highlighter/) library.

You can set the language, toggle line numbers, set the starting line number and highlight single lines via the property editor.

## Installation

`composer require cvette/neos-code-block`

## Usage and custom styles

The Codeblock node type works out-of-the-box by inlining the necessary CSS. If you want to customize the styling you can disable the inline CSS by setting the `inlineCss` path of the `Vette.CodeBlock:Geshi` prototype to `false`:

    prototype(Vette.CodeBlock:Geshi) {
	      inlineCss = false
    }
    
Example CSS files can be found in `Resources/Public/Styles/`. Please refer to the [GeSHi documentation](http://qbnz.com/highlighter/geshi-doc.html#using-an-external-stylesheet) for more information.

## License

The GNU General Public License Version 3 (GPLv3). Please see [LICENSE](LICENSE) for more information.
