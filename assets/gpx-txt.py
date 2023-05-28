import gpxpy
import gpxpy.gpx


def gpx_to_coordinates_list(gpx_file, output_file):
    # Parse the GPX file
    with open(gpx_file, 'r') as gpx_file:
        gpx = gpxpy.parse(gpx_file)

    # Prepare a list to store the coordinates
    coordinates = []

    # Iterate over tracks
    for track in gpx.tracks:
        # Iterate over segments in the track
        for segment in track.segments:
            # Iterate over points in the segment
            for point in segment.points:
                # Append the coordinates to the list
                coordinates.append([point.latitude, point.longitude])

    # Write the coordinates to the output file
    with open(output_file, 'w') as f:
        for coord in coordinates:
            f.write(str(coord) + ","'\n')


# Call the function
gpx_to_coordinates_list('aland.gpx', 'aland.txt')
