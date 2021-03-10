WebP Express 0.19.0. Conversion triggered using bulk conversion, 2021-03-05 20:58:42

*WebP Convert 2.3.2*  ignited.
- PHP version: 7.3.27
- Server software: Apache

Stack converter ignited

Options:
------------
The following options have been set explicitly. Note: it is the resulting options after merging down the "jpeg" and "png" options and any converter-prefixed options.
- source: [doc-root]conreality/wp-content/uploads/2021/03/shumanskyi.com004-1024x683.jpg
- destination: [doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/shumanskyi.com004-1024x683.jpg.webp
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
- source: [doc-root]conreality/wp-content/uploads/2021/03/shumanskyi.com004-1024x683.jpg
- destination: [doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/shumanskyi.com004-1024x683.jpg.webp
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
nice cwebp -metadata none -q 70 -alpha_q '85' -m 6 -low_memory '[doc-root]conreality/wp-content/uploads/2021/03/shumanskyi.com004-1024x683.jpg' -o '[doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/shumanskyi.com004-1024x683.jpg.webp.lossy.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/shumanskyi.com004-1024x683.jpg.webp.lossy.webp'
File:      [doc-root]conreality/wp-content/uploads/2021/03/shumanskyi.com004-1024x683.jpg
Dimension: 1024 x 683
Output:    23276 bytes Y-U-V-All-PSNR 42.00 45.55 45.76   42.91 dB
block count:  intra4: 1285
              intra16: 1467  (-> 53.31%)
              skipped block: 512 (18.60%)
bytes used:  header:             88  (0.4%)
             mode-partition:   6369  (27.4%)
 Residuals bytes  |segment 1|segment 2|segment 3|segment 4|  total
  intra4-coeffs:  |      87 |    3302 |    7713 |     972 |   12074  (51.9%)
 intra16-coeffs:  |       0 |      31 |     298 |    1837 |    2166  (9.3%)
  chroma coeffs:  |       3 |    1254 |    1029 |     265 |    2551  (11.0%)
    macroblocks:  |       0%|       8%|      30%|      61%|    2752
      quantizer:  |      39 |      35 |      31 |      25 |
   filter level:  |      18 |      10 |       8 |       5 |
------------------+---------+---------+---------+---------+-----------------
 segments total:  |      90 |    4587 |    9040 |    3074 |   16791  (72.1%)

Success
Reduction: 96% (went from 516 kb to 23 kb)

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
nice cwebp -metadata none -q 70 -alpha_q '85' -lossless -m 6 -low_memory '[doc-root]conreality/wp-content/uploads/2021/03/shumanskyi.com004-1024x683.jpg' -o '[doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/shumanskyi.com004-1024x683.jpg.webp.lossless.webp' 2>&1 2>&1

*Output:* 
Saving file '[doc-root]conreality/wp-content/webp-express/webp-images/uploads/2021/03/shumanskyi.com004-1024x683.jpg.webp.lossless.webp'
File:      [doc-root]conreality/wp-content/uploads/2021/03/shumanskyi.com004-1024x683.jpg
Dimension: 1024 x 683
Output:    713614 bytes
Lossless-ARGB compressed size: 713614 bytes
  * Lossless features used: PREDICTION CROSS-COLOR-TRANSFORM SUBTRACT-GREEN
  * Precision Bits: histogram=5 transform=3 cache=0

Success
Reduction: -35% (went from 516 kb to 697 kb)

Picking lossy
cwebp succeeded :)

Converted image in 1898 ms, reducing file size with 96% (went from 516 kb to 23 kb)
