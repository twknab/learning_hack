# Hack Notes

In hack things can be typed, so that all data types and objects essentially have typed parameters. This helps us avoid a whole host of issues in regards to type when referring the parameters that we encounter.

This is something that is not by default in regular PHP. AKA, you can provide various types of data to functions and have to manually check the data type within your own logic.

Hack is essentially designed around typing, and taking some ambiguity out of vanilla PHP.

## Async

Hack supports async in the sense that, similar to JS, I believe we can create promises. This is of course important in any API calls we have to make to remote servers.

### More Reading

This and other parts of this document came from the following URL: (Hack HHVM Website)[http://docs.hhvm.com/hack/overview/typing]

Please see that for more information.