[![Build Status](https://travis-ci.org/TOGoS/PHPBase32.svg?branch=master)](https://travis-ci.org/TOGoS/PHPBase32)

This library provides a Base32 encoder/decoder.
The format used is the same as that described by RFC3548
except that encoded strings will NOT include padding.

This is useful for encoding/decoding certain hash-based URNs such as
urn:sha1: OR urn:bitprint:s.
