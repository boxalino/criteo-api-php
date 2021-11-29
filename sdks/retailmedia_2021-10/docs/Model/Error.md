# # Error

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | (REQUIRED) A machine-readable unique error code, expressed as a string value. The format used must be kabab-case. |
**detail** | **string** | (RECOMMENDED) A human-readable explanation specific to this occurrence of the problem. | [optional]
**instance** | **string** | (REQUIRED) A URI reference that identifies the specific occurrence of the problem. |
**source** | **array<string,string>** | (OPTIONAL) A machine-readable structure to reference to the exact location(s) causing the error(s). | [optional]
**stack_trace** | **string[]** | (NEVER IN PRODUCTION) A human-readable stacktrace produced by the implementation technology e.g. .Net, Scala, etc | [optional]
**title** | **string** | (RECOMMENDED) A short, human-readable summary of the problem type. | [optional]
**trace_id** | **string** | (REQUIRED) The Correlation ID provided by the Gateway. It is also a unique identifier for this particular occurrence of the problem. |
**type** | **string** | Type should be: \&quot;validation\&quot;, \&quot;unavailable, \&quot;violation\&quot;, \&quot;permission\&quot;, ... |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
