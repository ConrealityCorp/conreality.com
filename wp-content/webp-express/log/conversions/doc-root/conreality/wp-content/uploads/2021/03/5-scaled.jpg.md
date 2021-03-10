WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-03-09 17:09:01

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.27
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]conreality/wp-content/uploads/2021/03/5-scaled.jpg
- destination: [doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/5-scaled.jpg.webp
- log-call-arguments: true
- converters: (array of 10 items)

The following options have not been explicitly set, so using the following defaults:
- converter-options: (empty array)
- shuffle: false
- preferred-converters: (empty array)
- extra-converters: (empty array)

The following options were supplied and are passed on to the converters in the stack:
- encoding: "auto"
- metadata: "none"
- near-lossless: 100
- quality: 70
------------


*Trying: cwebp* 

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]conreality/wp-content/uploads/2021/03/5-scaled.jpg
- destination: [doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/5-scaled.jpg.webp
- encoding: "auto"
- low-memory: true
- log-call-arguments: true
- metadata: "none"
- method: 6
- near-lossless: 100
- quality: 70
- use-nice: true
- command-line-options: ""
- try-common-system-paths: true
- try-supplied-binary-for-os: true

The following options have not been explicitly set, so using the following defaults:
- alpha-quality: 85
- auto-filter: false
- default-quality: 75
- max-quality: 85
- preset: "none"
- size-in-percentage: null (not set)
- skip: false
- rel-path-to-precompiled-binaries: *****
- try-cwebp: true
- try-discovering-cwebp: true
------------

Encoding is set to auto - converting to both lossless and lossy and selecting the smallest file

Converting to lossy
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries: 
- /usr/bin/cwebp
- /bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "bambuky" does not have permission to execute that binary)
- Executing: [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version 2>&1. Result: *Exec failed*. Permission denied (user: "bambuky" does not have permission to execute that binary)
- Executing: [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "bambuky" does not have permission to execute that binary)
Binaries ordered by version number.
- cwebp: (version: 0.3.0)
- /usr/bin/cwebp: (version: 0.3.0)
- /bin/cwebp: (version: 0.3.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 0.3.0
Quality: 70. 
Consider setting quality to "auto" instead. It is generally a better idea
Trying to convert by executing the following command:
nice cwebp -metadata none -q 70 -alpha_q '85' -m 6 -low_memory '[doc-root]conreality/wp-content/uploads/2021/03/5-scaled.jpg' -o '[doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/5-scaled.jpg.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/5-scaled.jpg.webp.lossy.webp'
File:      [doc-root]conreality/wp-content/uploads/2021/03/5-scaled.jpg
Dimension: 2560 x 1702
Output:    176592 bytes Y-U-V-All-PSNR 38.88 45.67 45.00   40.17 dB
block count:  intra4: 8211
              intra16: 8909  (-> 52.04%)
              skipped block: 2210 (12.91%)
bytes used:  header:            281  (0.2%)
             mode-partition:  43079  (24.4%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |    3150 |   29573 |   31056 |    9874 |   73653  (41.7%)
 intra16-coeffs:  |       0 |    1087 |   14587 |   29917 |   45591  (25.8%)
  chroma coeffs:  |     585 |    4269 |    6749 |    2357 |   13960  (7.9%)
    macroblocks:  |       0%|       9%|      34%|      55%|   17120
      quantizer:  |      39 |      35 |      30 |      25 |
   filter level:  |      18 |      10 |       8 |       5 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |    3735 |   34929 |   52392 |   42148 |  133204  (75.4%)

Success
Reduction: 96% (went from 4024 kb to 172 kb)

Converting to lossless
Looking for cwebp binaries.
Discovering if a plain cwebp call works (to skip this step, disable the "try-cwebp" option)
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
We could get the version, so yes, a plain cwebp call works
Discovering binaries using "which -a cwebp" command. (to skip this step, disable the "try-discovering-cwebp" option)
Found 2 binaries: 
- /usr/bin/cwebp
- /bin/cwebp
Discovering binaries by peeking in common system paths (to skip this step, disable the "try-common-system-paths" option)
Found 1 binaries: 
- /usr/bin/cwebp
Discovering binaries which are distributed with the webp-convert library (to skip this step, disable the "try-supplied-binary-for-os" option)
Checking if we have a supplied precompiled binary for your OS (Linux)... We do. We in fact have 3
Found 3 binaries: 
- [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64
- [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static
- [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64
Detecting versions of the cwebp binaries found
- Executing: cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /usr/bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: /bin/cwebp -version 2>&1. Result: version: *0.3.0*
- Executing: [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-110-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "bambuky" does not have permission to execute that binary)
- Executing: [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-103-linux-x86-64-static -version 2>&1. Result: *Exec failed*. Permission denied (user: "bambuky" does not have permission to execute that binary)
- Executing: [doc-root]conreality/wp-content/plugins/webp-express/vendor/rosell-dk/webp-convert/src/Convert/Converters/Binaries/cwebp-061-linux-x86-64 -version 2>&1. Result: *Exec failed*. Permission denied (user: "bambuky" does not have permission to execute that binary)
Binaries ordered by version number.
- cwebp: (version: 0.3.0)
- /usr/bin/cwebp: (version: 0.3.0)
- /bin/cwebp: (version: 0.3.0)
Trying the first of these. If that should fail (it should not), the next will be tried and so on.
Creating command line options for version: 0.3.0
Trying to convert by executing the following command:
nice cwebp -metadata none -q 70 -alpha_q '85' -lossless -m 6 -low_memory '[doc-root]conreality/wp-content/uploads/2021/03/5-scaled.jpg' -o '[doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/5-scaled.jpg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/5-scaled.jpg.webp.lossless.webp'
File:      [doc-root]conreality/wp-content/uploads/2021/03/5-scaled.jpg
Dimension: 2560 x 1702
Output:    5281186 bytes
Lossless-ARGB compressed size: 5281186 bytes
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=6 transform=3 cache=0

Success
Reduction: -28% (went from 4024 kb to 5157 kb)

Picking lossy
cwebp succeeded :)

Converted image in 11465 ms, reducing file size with 96% (went from 4024 kb to 172 kb)
